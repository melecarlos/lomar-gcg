
<footer class="bg-custom-black section-padding footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-box mb-md-80">
                    <div class="footer-heading">
                        <h4 class="text-custom-white no-margin">Our Services</h4>
                    </div>
                    <ul class="custom links">
                        @foreach ($services as $service)
                            <li>
                                <a href="#" class="text-custom-white">{{ $service->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="footer-box mb-md-80">
                    <div class="footer-heading">
                        <h4 class="text-custom-white no-margin">In Progress</h4>
                    </div>

                    <ul class="custom popular_post">
                        <li>
                            <div class="post">
                                <div class="post-wrapper">
                                    <div class="popular_post_img animate-img">
                                        <a href="blog-single.html">
                                            <img src="https://via.placeholder.com/80" class="img-fluid image-fit" alt="#">
                                        </a>
                                    </div>
                                    <div class="popular_post_title">
                                        <h6><a href="blog-single.html" class="text-custom-white fs-14 fw-400">8 Tips to Help You Finding New Home</a></h6>
                                        <div class="post-date">
                                            <p class="text-custom-white no-margin">12 Dec 2019</p>
                                            <p class="text-custom-white no-margin">99%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post">
                                <div class="post-wrapper">
                                    <div class="popular_post_img animate-img">
                                        <a href="blog-single.html">
                                            <img src="https://via.placeholder.com/80" class="img-fluid image-fit" alt="#">
                                        </a>
                                    </div>
                                    <div class="popular_post_title">
                                        <h6><a href="blog-single.html" class="text-custom-white fs-14 fw-400">Bedroom Colors You'll Never Regret</a></h6>
                                        <div class="post-date">
                                            <p class="text-custom-white no-margin">09 Dec 2019</p>
                                            <p class="text-custom-white no-margin">30%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post">
                                <div class="post-wrapper">
                                    <div class="popular_post_img animate-img">
                                        <a href="blog-single.html">
                                            <img src="https://via.placeholder.com/80" class="img-fluid image-fit" alt="#">
                                        </a>
                                    </div>
                                    <div class="popular_post_title">
                                        <h6><a href="blog-single.html" class="text-custom-white fs-14 fw-400">Bedroom Colors You'll Never Regret</a></h6>
                                        <div class="post-date">
                                            <p class="text-custom-white no-margin">09 Dec 2019</p>
                                            <p class="text-custom-white no-margin">80%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-box">
                    <div class="footer-heading">
                        <h4 class="text-custom-white no-margin">News Letter</h4>
                    </div>
                    <div class="newsletter">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-custom" placeholder="Email Id">
                            </div>
                            <button class="btn-first btn-submit btn-height" type="submit">Subscribe</button>
                        </form>
                    </div>
                    <div class="social-media">
                        <ul class="custom social-media">
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="payment-logo mb-md-20">
                    <span class="text-custom-white fs-14 mr-3">We are accept</span>
                    <div class="payemt-icon">
                        <img src="https://via.placeholder.com/50x30" alt="#">
                        <img src="https://via.placeholder.com/50x30" alt="#">
                        <img src="https://via.placeholder.com/50x30" alt="#">
                        <img src="https://via.placeholder.com/50x30" alt="#">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="text-custom-white no-margin">© Slidesigma - 2020 | All Right Reserved. <a href="https://slidesigma.com/" target="_blank" class="text-custom-white">Designed By Slidesigma</a></p>
            </div>
        </div>
    </div>
</div>
