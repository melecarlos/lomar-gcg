<div class="topbar bg-custom-black">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="left-side ">
                    <ul class="custom">
                        <li>
                            <a href="mailto:roberto@lomar-gcg.com" class="text-custom-white"><i class="fas fa-envelope text-custom-blue"></i> roberto@lomar-gcg.com</a>
                        </li>
                        <li>
                            <a href="tel:5712883130" class="text-custom-white"><i class="fas fa-phone text-custom-blue"></i> 571 288 3130</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="right-side">
                    <ul class="custom">
                        <li>
                            <a href="#" class="text-custom-white"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#" class="text-custom-white"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="text-custom-white"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" class="text-custom-white"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- topbar -->
<!-- navigation -->
<header class="menu-style">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header">
                    <div class="logo">
                        <a href="#">
                            <img src="https://via.placeholder.com/120x60" class="img-fluid image-fit" alt="Logo">
                        </a>
                    </div>
                    <div class="right-side">
                        <div class="navigation">
                            <div class="logo">
                                <a href="#">
                                    <img src="https://via.placeholder.com/120x60" class="img-fluid image-fit" alt="Logo">
                                </a>
                            </div>
                            <nav>
                                <ul class="custom main-menu">
                                    <li class="menu-item">
                                        <a href="about.html" class="text-theme fs-14">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="about.html" class="text-theme fs-14">About Us</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" class="text-theme fs-14">Services</a>
                                        <ul class="custom sub-menu">
                                            @foreach ($services as $service)
                                                <li class="menu-item">
                                                    <a href="#" class="text-theme">{{ $service->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class="social-media">
                                <ul class="custom">
                                    <li>
                                        <a href="#" class="text-custom-white"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-custom-white"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-custom-white"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-custom-white"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="hamburger-menu">
                            <div class="menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="cta-btn">
                            <div class="cta-text">
                                <a href="#" class="addlisting-btn btn-first btn-border">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>