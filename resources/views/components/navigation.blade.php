<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset("images/logo.svg") }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <button class="hire-us-btn">
                <a href="/">Hire us
                    <img src="{{ asset("images/icons/icon-dots.svg") }}" alt="dots">
                </a>
            </button>
        </div>
    </div>
</nav>

