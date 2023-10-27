<div class="container mt-5 footer">
    <div class="row pb-4">
        <!-- Column 1: Logo and Text -->
        <div class="col-md-3 footer__column">
            <a class="footer__column__brand" href="#">
                <img class="footer__column__brand__logo" src="{{ asset("images/logo.svg") }}" alt="logo">
            </a>
        </div>

        <div class="col-md-3 footer__column">
            <h4>Useful Links</h4>
            <ul class="footer__column__list__wrapper">
                <li class="footer__column__list"><a class="footer__column__list__item" href="#">Home</a></li>
                <li class="footer__column__list"><a class="footer__column__list__item" href="#about">About</a></li>
                <li class="footer__column__list"><a class="footer__column__list__item" href="#services">Services</a></li>
                <li class="footer__column__list"><a class="footer__column__list__item" href="#">News</a></li>
                <li class="footer__column__list"><a class="footer__column__list__item" href="#contact">Contact</a></li>
            </ul>
        </div>

        <div class="col-md-3 footer__column">
            <h4>Legal</h4>
            <ul class="footer__column__list__wrapper">
                <li class="footer__column__list"><a class="footer__column__list__item" href="#">Terms & Conditions</a></li>
                <li class="footer__column__list"><a class="footer__column__list__item" href="#">Privacy Policy</a></li>
                <li class="footer__column__list"><a class="footer__column__list__item" href="#">Terms of Sales</a></li>
            </ul>
        </div>

        <div class="col-md-3 footer__column">
            <h4>Subscribe</h4>
            <div class="footer__column__input__wrapper">
{{--                <img src="{{ asset('images/icons/icon-mail.svg') }}" alt="mail-icon" class="footer__column__input__icon-mail">--}}
{{--                <input class="footer__column__input" type="email" class="form-control mb-2" placeholder="Email">--}}
{{--                <a>--}}
{{--                <img src="{{ asset('images/icons/icon-send.svg') }}" alt="send-icon" class="footer__column__input__icon-send">--}}
{{--                </a>--}}
            </div>
            <div class="footer__column__icons">
                <img src="{{ asset('images/icons/icon-facebook.svg') }}" style="margin-right: 10px;" alt="facebook-icon" class="footer__column__icon">
                <img src="{{ asset('images/icons/icon-twitter.svg') }}" style="margin-right: 10px;" alt="twitter-icon" class="footer__column__icon">
                <img src="{{ asset('images/icons/icon-instagram.svg') }}" style="margin-right: 10px;" alt="instagram-icon" class="footer__column__icon">
                <img src="{{ asset('images/icons/icon-linkedin.svg') }}" alt="linkedin-icon" class="footer__column__icon">
            </div>
        </div>
    </div>
</div>
<div class="col-12 copyright">
    &copy 2023 advertising. All rights reserved. Development by Cellest-IT.
</div>
