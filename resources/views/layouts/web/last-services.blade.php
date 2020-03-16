@foreach ($services as $service)
    @if ($service->id % 2 == 0)
        <section class="section-padding">
    @else
        <section class="section-padding bg-light-white">
    @endif
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h5 class="text-custom-blue">Recent Projects Of</h5>
                <h3 class="text-theme fw-700">{{ $service->name }}</h3>
            </div>
            <div class="section-description">
                <p class="text-light-white">{{ $service->description }}</p>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-lg-4">
                    <div class="swiper-slide">
                        <div class="property-grid-box">
                            <div class="property-grid-wrapper">
                                <div class="property-img animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/350x235" class="img-fluid full-width" alt="#">
                                    </a>
                                    <div class="property-address bg-custom-blue">
                                        <a href="#"><i class="flaticon-pin"></i>Lynchburg, NY</a>
                                    </div>
                                </div>
                                <div class="property-grid-caption padding-20">
                                    {{-- <div class="price mb-xl-20 fs-16 fw-700 text-custom-blue">$ 275,000</div> --}}
                                    <ul class="custom property-feature">
                                        <li> <i class="flaticon-garden"></i>
                                            <span>Garden</span>
                                        </li>
                                        <li> <i class="flaticon-lawn-mower"></i>
                                            <span>1 Tool</span>
                                        </li>
                                        <li> <i class="flaticon-selection"></i>
                                            <span>530 sq ft</span>
                                        </li>
                                        <li> <i class="flaticon-agriculture"></i>
                                            <span>1 Gardener</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="property-grid-footer">
                                    <a href="#" class="text-theme fs-14 fw-600">Read More <span class="flaticon-right-arrow ml-1"></span></a>
                                    <div class="ratings">
                                        <span class="fs-16 text-custom-yellow"><i class="fas fa-star"></i></span>
                                        <span class="fs-16 text-custom-yellow"><i class="fas fa-star"></i></span>
                                        <span class="fs-16 text-custom-yellow"><i class="fas fa-star"></i></span>
                                        <span class="fs-16 text-light-white"><i class="fas fa-star"></i></span>
                                        <span class="fs-16 text-light-white"><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
@endforeach