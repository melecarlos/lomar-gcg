@extends('layouts.app')
@section('content')
<div class="banner-style-2">
    <div class="section-padding transform-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-12 align-self-center mb-md-80">
                    <div class="banner-text mb-xl-20">
                        <h6 class="text-custom-blue">CLICK OR CALL WE DO IT ALL</h6>
                        <h1 class="text-theme fw-600">
                            Find Properties That Make You Money
                        </h1>
                        <p class="text-theme fs-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quia fugiat ea adipisci earum repudiandae, corporis culpa esse distinctio consequuntur?</p>
                    </div>
                    <div class="banner-counter">
                        <ul class="custom">
                            <li>
                                <strong class="count">1586</strong>
                                <span class="fw-600 text-theme">Buy</span>
                            </li>
                            <li>
                                <strong class="count">3543</strong>
                                <span class="fw-600 text-theme">Sale</span>
                            </li>
                            <li>
                                <strong class="count">1232</strong>
                                <span class="fw-600 text-theme">Rent</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-12">
                    <div class="banner-form">
                        <form>
                            <h5 class="text-theme">Find Your Dream Home</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="search" name="#" class="form-control form-control-custom" placeholder="Enter Property, Location, Landmark ...">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control form-control-custom custom-select">
                                            <option>Garden Status</option>
                                            <option>Any</option>
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control form-control-custom custom-select">
                                            <option>Any Type</option>
                                            <option>Garden</option>
                                            <option>Urban</option>
                                            <option>Maintainance</option>
                                            <option>Events</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control form-control-custom custom-select">
                                            <option>Bed</option>
                                            <option>4</option>
                                            <option>3</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control form-control-custom custom-select">
                                            <option>Bath</option>
                                            <option>4</option>
                                            <option>3</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-8 col-sm-12">
                                    <div class="form-group">
                                        <div class="range-slider">
                                            <label for="amount" class="fs-16 fw-600 text-theme">Price:</label>
                                            <input type="text" id="amount" readonly>
                                            <input type="text" id="amount1" readonly>
                                        </div>
                                        <div id="slider-range"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-first btn-submit full-width btn-height">Search Property</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start About us -->
<section class="section-padding about-us" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-6 align-self-center mb-md-80">
                <div class="about-left-side">
                    <div class="section-header">
                        <div class="section-heading">
                            <h5 class="text-custom-blue">Our</h5>
                            <h3 class="text-theme fw-700">Mision</h3>
                        </div>
                    </div>
                    <div class="about-desc">
                        <p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                    <div class="section-header mt-5">
                        <div class="section-heading">
                            <h5 class="text-custom-blue">Our</h5>
                            <h3 class="text-theme fw-700">Vision</h3>
                        </div>
                    </div>
                    <div class="about-desc">
                        <p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="about-right-side">
                    <img src="https://via.placeholder.com/410x450" class="img-fluid full-width" alt="about">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light-white">
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h5 class="text-custom-blue">Recent Projects</h5>
                <h3 class="text-theme fw-700">Custom Stone Venners</h3>
            </div>
            <div class="section-description">
                <p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="swiper-slide">
                    <div class="property-grid-box">
                        <div class="property-grid-wrapper">
                            <div class="property-img animate-img">
                                <a href="#">
                                    <img src="https://via.placeholder.com/350x235" class="img-fluid full-width" alt="#">
                                </a>
                                <div class="property-address bg-custom-blue">
                                    <a href="#"><i class="flaticon-pin"></i>9364 School St. Lynchburg, NY</a>
                                </div>
                                <div class="property-save-btn transform-center">
                                    <ul class="custom">
                                        <li class="custom-tooltip" data-tip="Photos">
                                            <a href="#"><i class="fas fa-camera"></i></a>
                                        </li>
                                        <li class="custom-tooltip" data-tip="Bookmark">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li class="custom-tooltip" data-tip="Compare">
                                            <a href="#"><i class="fas fa-arrows-alt-h"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="property-grid-caption padding-20">
                                <h5><a href="#" class="text-theme">Eagle Apartments</a></h5>
                                <div class="price mb-xl-20 fs-16 fw-700 text-custom-blue">$ 275,000</div>
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
            <div class="col-lg-4">
                <div class="swiper-slide">
                    <div class="property-grid-box">
                        <div class="property-grid-wrapper">
                            <div class="property-img animate-img">
                                <a href="#">
                                    <img src="https://via.placeholder.com/350x235" class="img-fluid full-width" alt="#">
                                </a>
                                <div class="property-address bg-custom-blue">
                                    <a href="#"><i class="flaticon-pin"></i>9364 School St. Lynchburg, NY</a>
                                </div>
                                <div class="property-save-btn transform-center">
                                    <ul class="custom">
                                        <li class="custom-tooltip" data-tip="Photos">
                                            <a href="#"><i class="fas fa-camera"></i></a>
                                        </li>
                                        <li class="custom-tooltip" data-tip="Bookmark">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li class="custom-tooltip" data-tip="Compare">
                                            <a href="#"><i class="fas fa-arrows-alt-h"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="property-grid-caption padding-20">
                                <h5><a href="#" class="text-theme">Eagle Apartments</a></h5>
                                <div class="price mb-xl-20 fs-16 fw-700 text-custom-blue">$ 275,000</div>
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
            <div class="col-lg-4">
                <div class="swiper-slide">
                    <div class="property-grid-box">
                        <div class="property-grid-wrapper">
                            <div class="property-img animate-img">
                                <a href="#">
                                    <img src="https://via.placeholder.com/350x235" class="img-fluid full-width" alt="#">
                                </a>
                                <div class="property-address bg-custom-blue">
                                    <a href="#"><i class="flaticon-pin"></i>9364 School St. Lynchburg, NY</a>
                                </div>
                                <div class="property-save-btn transform-center">
                                    <ul class="custom">
                                        <li class="custom-tooltip" data-tip="Photos">
                                            <a href="#"><i class="fas fa-camera"></i></a>
                                        </li>
                                        <li class="custom-tooltip" data-tip="Bookmark">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li class="custom-tooltip" data-tip="Compare">
                                            <a href="#"><i class="fas fa-arrows-alt-h"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="property-grid-caption padding-20">
                                <h5><a href="#" class="text-theme">Eagle Apartments</a></h5>
                                <div class="price mb-xl-20 fs-16 fw-700 text-custom-blue">$ 275,000</div>
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
        </div>
</section>


<section class="section-padding">
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h5 class="text-custom-blue">Recent Projects</h5>
                <h3 class="text-theme fw-700">Driveways & Entraces</h3>
            </div>
            <div class="section-description">
                <p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="swiper-slide">
                    <div class="property-grid-box">
                        <div class="property-grid-wrapper">
                            <div class="property-img animate-img">
                                <a href="#">
                                    <img src="https://via.placeholder.com/350x235" class="img-fluid full-width" alt="#">
                                </a>
                                <div class="property-address bg-custom-blue">
                                    <a href="#"><i class="flaticon-pin"></i>9364 School St. Lynchburg, NY</a>
                                </div>
                            </div>
                            <div class="property-grid-caption padding-20">
                                <h5><a href="#" class="text-theme">Eagle Apartments</a></h5>
                                <div class="price mb-xl-20 fs-16 fw-700 text-custom-blue">$ 275,000</div>
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
            <div class="col-lg-4">
                <div class="swiper-slide">
                    <div class="property-grid-box">
                        <div class="property-grid-wrapper">
                            <div class="property-img animate-img">
                                <a href="#">
                                    <img src="https://via.placeholder.com/350x235" class="img-fluid full-width" alt="#">
                                </a>
                                <div class="property-address bg-custom-blue">
                                    <a href="#"><i class="flaticon-pin"></i>9364 School St. Lynchburg, NY</a>
                                </div>
                                <div class="property-save-btn transform-center">
                                    <ul class="custom">
                                        <li class="custom-tooltip" data-tip="Photos">
                                            <a href="#"><i class="fas fa-camera"></i></a>
                                        </li>
                                        <li class="custom-tooltip" data-tip="Bookmark">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li class="custom-tooltip" data-tip="Compare">
                                            <a href="#"><i class="fas fa-arrows-alt-h"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="property-grid-caption padding-20">
                                <h5><a href="#" class="text-theme">Eagle Apartments</a></h5>
                                <div class="price mb-xl-20 fs-16 fw-700 text-custom-blue">$ 275,000</div>
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
            <div class="col-lg-4">
                <div class="swiper-slide">
                    <div class="property-grid-box">
                        <div class="property-grid-wrapper">
                            <div class="property-img animate-img">
                                <a href="#">
                                    <img src="https://via.placeholder.com/350x235" class="img-fluid full-width" alt="#">
                                </a>
                                <div class="property-address bg-custom-blue">
                                    <a href="#"><i class="flaticon-pin"></i>9364 School St. Lynchburg, NY</a>
                                </div>
                                <div class="property-save-btn transform-center">
                                    <ul class="custom">
                                        <li class="custom-tooltip" data-tip="Photos">
                                            <a href="#"><i class="fas fa-camera"></i></a>
                                        </li>
                                        <li class="custom-tooltip" data-tip="Bookmark">
                                            <a href="#"><i class="fas fa-star"></i></a>
                                        </li>
                                        <li class="custom-tooltip" data-tip="Compare">
                                            <a href="#"><i class="fas fa-arrows-alt-h"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="property-grid-caption padding-20">
                                <h5><a href="#" class="text-theme">Eagle Apartments</a></h5>
                                <div class="price mb-xl-20 fs-16 fw-700 text-custom-blue">$ 275,000</div>
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
        </div>
</section>

<section class="section-padding bg-light-white browse-listing-gallery">
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h5 class="text-custom-blue">Browse Listings in</h5>
                <h3 class="text-theme fw-700">These Areas</h3>
            </div>
            <div class="section-description">
                <p class="text-light-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="browse-gallery">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="gallery-img mb-sm-20">
                                <a href="#">
                                    <img src="https://via.placeholder.com/745x365" class="img-fluid full-width" alt="image">
                                </a>
                                <div class="img-overlay"></div>
                                <div class="gallery-content text-center transform-center">
                                    <h6 class="text-custom-white fw-600 text-uppercase">Los Angeles</h6>
                                    <span class="text-custom-white d-block mb-xl-20">The family areas</span>
                                    <a href="#" class="btn-first btn-border">12 Listing</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gallery-img mb-sm-20">
                                <a href="#">
                                    <img src="https://via.placeholder.com/365x365" class="img-fluid full-width" alt="image">
                                </a>
                                <div class="img-overlay"></div>
                                <div class="gallery-content text-center transform-center">
                                    <h6 class="text-custom-white fw-600 text-uppercase">Chicago</h6>
                                    <span class="text-custom-white d-block mb-xl-20">The family areas</span>
                                    <a href="#" class="btn-first btn-border">15 Listing</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="gallery-img mb-sm-20">
                                <a href="#">
                                    <img src="https://via.placeholder.com/270" class="img-fluid full-width" alt="image">
                                </a>
                                <div class="img-overlay"></div>
                                <div class="gallery-content text-center transform-center">
                                    <h6 class="text-custom-white fw-600 text-uppercase">San Jose</h6>
                                    <span class="text-custom-white d-block mb-xl-20">The family areas</span>
                                    <a href="#" class="btn-first btn-border">17 Listing</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="gallery-img mb-sm-20">
                                <a href="#">
                                    <img src="https://via.placeholder.com/555x270" class="img-fluid full-width" alt="image">
                                </a>
                                <div class="img-overlay"></div>
                                <div class="gallery-content text-center transform-center">
                                    <h6 class="text-custom-white fw-600 text-uppercase">Columbus</h6>
                                    <span class="text-custom-white d-block mb-xl-20">The family areas</span>
                                    <a href="#" class="btn-first btn-border">20 Listing</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="gallery-img mb-sm-20">
                                <a href="#">
                                    <img src="https://via.placeholder.com/270x270" class="img-fluid full-width" alt="image">
                                </a>
                                <div class="img-overlay"></div>
                                <div class="gallery-content text-center transform-center">
                                    <h6 class="text-custom-white fw-600 text-uppercase">San Francisco</h6>
                                    <span class="text-custom-white d-block mb-xl-20">The family areas</span>
                                    <a href="#" class="btn-first btn-border">22 Listing</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="gallery-img mb-sm-20">
                                <a href="#">
                                    <img src="https://via.placeholder.com/745x365" class="img-fluid full-width" alt="image">
                                </a>
                                <div class="img-overlay"></div>
                                <div class="gallery-content text-center transform-center">
                                    <h6 class="text-custom-white fw-600 text-uppercase">Portland</h6>
                                    <span class="text-custom-white d-block mb-xl-20">The family areas</span>
                                    <a href="#" class="btn-first btn-border">52 Listing</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gallery-img">
                                <a href="#">
                                    <img src="https://via.placeholder.com/365" class="img-fluid full-width" alt="image">
                                </a>
                                <div class="img-overlay"></div>
                                <div class="gallery-content text-center transform-center">
                                    <h6 class="text-custom-white fw-600 text-uppercase">Kansas City</h6>
                                    <span class="text-custom-white d-block mb-xl-20">The comercial areas</span>
                                    <a href="#" class="btn-first btn-border">82 Listing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="swiper-container brands-slider swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper" style="transform: translate3d(-2931.43px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="5">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="6">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="7">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="8">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="9">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="10">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="11">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-next" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="0">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="1">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="2">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="3">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="4">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="5">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="6">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="7">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="8">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="9">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="10">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="11">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="0">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="1">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="2">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="3">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="4">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="5">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" style="width: 132.857px; margin-right: 30px;" data-swiper-slide-index="6">
                            <div class="partner-box">
                                <div class="partner-logo animate-img">
                                    <a href="#">
                                        <img src="https://via.placeholder.com/120" class="img-fluid" alt="partners">
                                    </a>
                                </div>
                            </div>
                        </div></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-custom-black section-padding footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-box mb-md-80">
                    <div class="footer-heading">
                        <h4 class="text-custom-white no-margin">Useful Links</h4>
                    </div>
                    <ul class="custom links">
                        <li>
                            <a href="about.html" class="text-custom-white">About Us</a>
                        </li>
                        <li>
                            <a href="listing.html" class="text-custom-white">Listings</a>
                        </li>
                        <li>
                            <a href="blog.html" class="text-custom-white">Blog</a>
                        </li>
                        <li>
                            <a href="faqs.html" class="text-custom-white">FAQs</a>
                        </li>
                        <li>
                            <a href="contact.html" class="text-custom-white">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-box mb-md-80">
                    <div class="footer-heading">
                        <h4 class="text-custom-white no-margin">Featured Post</h4>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-box mb-xs-80">
                    <div class="footer-heading">
                        <h4 class="text-custom-white no-margin">Insta Feeds</h4>
                    </div>
                    <ul class="custom insta-feed">
                        <li class="insta-item animate-img">
                            <a href="#">
                                <img src="https://via.placeholder.com/80" class="img-fluid full-width" alt="insta">
                            </a>
                        </li>
                        <li class="insta-item animate-img">
                            <a href="#">
                                <img src="https://via.placeholder.com/80" class="img-fluid full-width" alt="insta">
                            </a>
                        </li>
                        <li class="insta-item animate-img">
                            <a href="#">
                                <img src="https://via.placeholder.com/80" class="img-fluid full-width" alt="insta">
                            </a>
                        </li>
                        <li class="insta-item animate-img">
                            <a href="#">
                                <img src="https://via.placeholder.com/80" class="img-fluid full-width" alt="insta">
                            </a>
                        </li>
                        <li class="insta-item animate-img">
                            <a href="#">
                                <img src="https://via.placeholder.com/80" class="img-fluid full-width" alt="insta">
                            </a>
                        </li>
                        <li class="insta-item animate-img">
                            <a href="#">
                                <img src="https://via.placeholder.com/80" class="img-fluid full-width" alt="insta">
                            </a>
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
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
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


@endsection