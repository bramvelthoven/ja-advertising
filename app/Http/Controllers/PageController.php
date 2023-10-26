<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\Message;

class PageController extends Controller
{
    public function post_message_send(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'g-recaptcha-response' => [
                'required',
                function ($attribute, $value, $fail) {
                    $g_response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
                        'secret' => env('RECAPTCHA_SECRET_KEY'),
                        'response' => $value,
                        'remoteip' => \request()->ip()
                    ]);

                    if (!$g_response->json('success')) {
                        $fail("The {$attribute} is invalid.");
                    }
                },
            ],
        ]);




        $data = $this->Form_To_Array($request->all());
        $naam = $data['name'];
        $email = $data['email'];
        $bericht = $data['message'];

    //
            Mail::to($email)->bcc(["bramvelthoven123@gmail.com"])->send(new Message(
                ['data' => $data, 'bericht' => $bericht, 'email' => $email, 'naam' => $naam]
            ));

        return redirect()->to('#contact')->with('alert', "Aanvraag gelukt $naam. Wij nemen zo spoedig mogelijk contact met u op");

    }
    private function Form_To_Array($arr)
    {
        if (!is_array($arr)) return false;
        else {
            $return = array();
            foreach ($arr as $key => $value) {
                // TRY to decode $value to array
                $decoded_value = json_decode($value, true);
                // Check if Decoding Json worked without errorsg
                if (json_last_error() == JSON_ERROR_NONE)
                    // $value is a Json. Put it in $return
                    $return[$key] = $decoded_value;
                else
                    // value is not a Json. Do nothing.
                    $return[$key] = $value;
            }
            return $return;
        }
    }
}

