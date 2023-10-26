<div class="contact-banner"></div>
<div class="contact-wrapper pt-2 md-pt-5">
    <div class="container contact">
        <div class="row">
            <div class="col-md-7">
                <div class="mb-4">
                    <button class="contact__button">
                        <a class="contact__button__link">Get Solution Fast</a>
                    </button>
                    <h2 class="contact__title">Get Free Advertising <br>
                    Consultation Today.</h2>
                    <p class="contact__text">
                        Phosfluorescently engage worldwide methodologies with web-enabled<br>
                        technology. Interactively coordinate proactive e-commerce via process-<br>
                        centric outside the box thinking.</p>
                </div>
            </div>

            <div class="col-md-5">
                <div class="contact__form" id="contact">
                    <div class="contact__form__inner">
                    <h3 class="contact__form__title">Reach out by the <br>
                    form below.</h3>
                        <form id="captcha" action="sendemail" method="POST" >
                            @csrf
                            @if (session('alert'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('alert') }}
                                </div>
                            @endif
                        <div class="contact__form__group">
                            <label class="contact__form__group__label" for="name">Full name</label>
                            <input type="text" class="contact__form__group__input" id="name" name="name">
                        </div>
                        <div class="contact__form__group">
                            <label class="contact__form__group__label" for="email">Email</label>
                            <input type="email" class="contact__form__group__input" id="email" name="email">
                        </div>
                        <div class="contact__form__group mb-4">
                            <label class="contact__form__group__label" for="message">Message</label>
                            <textarea class="contact__form__group__input" id="message" name="message" rows="4"></textarea>
                        </div>
                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                        <button class="contact__form__button" id="submitButton" onclick="onClick(event)">
                            <a class="contact__form__button__link">Request Free Consultation</a></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function onClick(e) {
        e.preventDefault();
        const submitButton = document.getElementById('submitButton');
        if (submitButton) {
            submitButton.disabled = true;
        }
        grecaptcha.ready(function () {
            grecaptcha.execute("{{env('RECAPTCHA_SITE_KEY')}}", {action: 'submit'}).then(function (token) {
                document.getElementById("g-recaptcha-response").value = token;
                document.getElementById("captcha").submit();
            });
        });
    }
</script>

