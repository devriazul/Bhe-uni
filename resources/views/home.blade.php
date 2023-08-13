@extends('layouts.app')
@section('content')
{{-- Hero Section Start --}}
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6 d-flex align-items-center">
                <div class="">
                    <h1>Unlock Your Potential with BHE</h1>
                    <p>Boost Education Service has undergone a strategic transformation. It is now an AI-powered EdTech platform. Our primary objective is to facilitate your seamless integration with renowned universities and colleges worldwide. Our advanced technology-driven platform now empowers our students to leverage global educational opportunities more adeptly.</p>
                    <button>Check Eligibility</button>
                    <button>Apply Now</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <img src="{{ asset('front/img/home/Laptop Slider.png') }}" class="img-fluid" alt="...">
                </div>
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <a href=""><img src="{{ asset('front/img/home/Mobile app store badge.png') }}" class="img-fluid pe-3" alt="..."></a>
                        <a href=""><img src="{{ asset('front/img/home/Mobile app store badge-1.png') }}" class="img-fluid" alt="..."></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Hero Section End --}}

{{-- Search Section Start --}}
    <div class="search-section">
        <div class="py-5">

        </div>
        <div class="container mb-5">
            <div class="card p-5 highligh-secondary">
                <div class="row pb-2">
                    <div class="col-md-3">
                        <h2 class="job-search-title">Course Search</h2>
                    </div>
                    <div class="col-md-9 d-flex justify-content-between">
                        <div class="col pe-3">
                            <select class="form-select rounded-pill" id="location">
                                <option selected>Select Country</option>
                                <option value="1">Country 1</option>
                                <option value="2">Country 2</option>
                            </select>
                        </div>
                        <div class="col pe-3">
                            <select class="form-select rounded-pill" id="department">
                                <option selected>Select Universities</option>
                                <option value="1">Universities 1</option>
                                <option value="2">Universities 2</option>
                            </select>
                        </div>
                        <div class="col pe-3">
                            <select class="form-select rounded-pill" id="work-type">
                                <option selected>Select Course</option>
                                <option value="1">Work Type 1</option>
                                <option value="2">Work Type 2</option>
                            </select>
                        </div>
                        <div class="col pe-3">
                            <select class="form-select rounded-pill" id="work-type">
                                <option selected>Select Tution Type</option>
                                <option value="1">Lowest Tution Fees</option>
                                <option value="2">Medium Tution Fees</option>
                                <option value="2">Highest Tution Fees</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <input type="text" class="rounded-pill form-control" placeholder="🔎 Choose a subject or enter a keyword" aria-label="course search" aria-describedby="search-icon">
                    </div>
                    <div class="col-md-5">
                        <select class="form-select rounded-pill" id="work-type">
                            <option selected>Select Level of Education</option>
                            <option value="1">Post Graduate</option>
                            <option value="2">Bachelor</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <a class="btn rounded-pill text-white search-button" type="button">Search</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
{{-- Search Section End --}}

{{-- Logo Section Start --}}
    <div class="container">
        <h4 class="text-center fw-bold primary-color py-3"><span class="secondary-color">Trusted</span> by <span class="secondary-color">300</span> Top Ranked Universities</h4>
        <div class="row">
            <div class="col-md-2">
                <img class="img-fluid mb-5" src="{{ asset('front/img/home/Frame 152.png') }}"  alt="">
            </div>
            <div class="col-md-10">
                <div class="lc-block">
                    <div id="carouselLogos" class="carousel slide my-3" data-bs-ride="carousel">
                        <div class="carousel-inner px-5">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-6 col-lg-2 align-self-center">
                                        <img class="img-fluid d-block w-100 px-4 py-2 mb-3 bg-w border rounded-3" src="{{ asset('front/img/uni-logo/aru-2.webp') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="img-fluid d-block w-100 px-4 py-2 mb-3 bg-w border rounded-3" src="{{ asset('front/img/uni-logo/Keela-logo.webp') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="img-fluid d-block w-100 px-4 py-2 mb-3 bg-w border rounded-3" src="{{ asset('front/img/uni-logo/Kings-Edu-for-life.webp') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="img-fluid d-block w-100 px-4 py-2 mb-3 bg-w border rounded-3" src="{{ asset('front/img/uni-logo/Kins-Stage-B-S.webp') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="img-fluid d-block w-100 px-4 py-2 mb-3 bg-w border rounded-3" src="{{ asset('front/img/uni-logo/Malvern-house-london.webp') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="img-fluid d-block w-100 px-4 py-2 mb-3 bg-w border rounded-3" src="{{ asset('front/img/uni-logo/Nord_Anglia_Education.webp') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-6 col-lg-2 align-self-center">
                                        <img class="img-fluid d-block w-100 px-4 py-2 mb-3 bg-w border rounded-3" src="{{ asset('front/img/uni-logo/North-London-Grammar-School.webp') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="img-fluid d-block w-100 px-4 py-2 mb-3 bg-w border rounded-3" src="{{ asset('front/img/uni-logo/oxford-logo.webp') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="img-fluid d-block w-100 px-4 py-2 mb-3 bg-w border rounded-3" src="{{ asset('front/img/uni-logo/Study-Group.webp') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="img-fluid d-block w-100 px-4 py-2 mb-3 bg-w border rounded-3" src="{{ asset('front/img/uni-logo/UCA.webp') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="img-fluid d-block w-100 px-4 py-2 mb-3 bg-w border rounded-3" src="{{ asset('front/img/uni-logo/uclan-logo.webp') }}" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="img-fluid d-block w-100 px-4 py-2 mb-3 bg-w border rounded-3" src="{{ asset('front/img/uni-logo/Ravensbourne-Uni.webp') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Search Section End --}}

{{-- Schoolarship section start --}}
<div class="secondary-light-background">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('front/img/home/Rectangle 7009.png') }}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h5 class="secondary-color fw-bold">Scholarship</h5>
                    <h3 class="primary-color fw-bold">and Funding</h3>
                    <p>BHE Uni, we are dedicated to helping students worldwide achieve their dreams of studying in prestigious universities in the UK, USA, Canada and Australia. Through our comprehensive scholarship and funding services, we provide specific scholarships and bursaries...</p>
                    <button>Read More</button>
                    <button>Make Enquiry</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Schoolarship section End --}}

{{-- Book & Accommodation section Start --}}
    <div class="container my-md-5">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center px-5 py-4 py-md-0">
                <div class="card border-0 shadow">
                    <img src="{{ asset('front/img/home/Rectangle 6994.png') }}" class="card-img-top img-fluid" alt="..." style="max-height: 200px;">
                    <div class="card-body mx-3">
                        <p class="card-text secondary-color py-2 fw-bold">Flight  Booking</p>
                        <h5 class="card-title primary-color pb-2 fw-bold">Effortless Flight Booking: Simplified <br> and Seamless</h5>
                        <button class="my-3">Book Your Flight</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center px-5 py-4 py-md-0">
                <div class="card border-0 shadow">
                    <img src="{{ asset('front/img/home/Rectangle 6994-1.png') }}" class="card-img-top img-fluid" alt="..." style="max-height: 200px;">
                    <div class="card-body mx-3">
                        <p class="card-text secondary-color py-2 fw-bold">Accommodations</p>
                        <h5 class="card-title primary-color pb-2 fw-bold">Seamless Accommodation Booking: Effortlessly Reserve Your Stay</h5>
                        <button class="my-3">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Book & Accommodation section End --}}

{{-- Why Choose section Start --}}
    <div class="secondary-light-background">
        <div class="container pb-5">
            <div class="row py-5">
                <div class="col-md-6">
                    <div class="secondary-color">
                        <h2 class="fw-bold py-3">Why Choose BHE?</h2>
                        <p><img src="{{ asset('front/img/home/icon-tik.png') }}" alt=""> Established: Our Journey started in 2012 and served over 30,000 applicants for their higher education guidance.</p>
                        <p><img src="{{ asset('front/img/home/icon-tik.png') }}" alt=""> ‘Check Eligibility tool’ Powered by AI: Experience a seamless and efficient application journey with our cutting-edge Artificial Intelligence tools, simplifying the process and saving you valuable time.</p>
                        <p><img src="{{ asset('front/img/home/icon-tik.png') }}" alt=""> One-2-One Consultations: Connect with world-class experts for tailored guidance, ensuring you receive prompt responses and making well-informed decisions about your academic path. In Addition, prepare confidently for interviews and Pre-CAS interviews with our dedicated YouTube channel and mobile app, providing comprehensive interview prep and CAS guidance.</p>
                        <p><img src="{{ asset('front/img/home/icon-tik.png') }}" alt=""> Fast-Truck Offer Letters: No more waiting anxiously! Get your offer letter within 24-48 hours, securing your place at your dream university without delays. It’s only for specific University.</p>
                        <p><img src="{{ asset('front/img/home/icon-tik.png') }}" alt=""> Extensive Social Media Presence: Stay connected and inspired through all major social media platforms, where we share valuable updates on scholarships and motivational content.</p>
                        <p><img src="{{ asset('front/img/home/icon-tik.png') }}" alt=""> Online ILETS or English test preparation: We provide video content to prepare for English tests such as IELTS, TOFEL, PTE and Duolingo.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <img src="{{ asset('front/img/home/Vvector Smart Object 1.png') }}" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>
    <div class="container px-5 mb-5" style="margin-top: -70px">
        <div class="px-5">
            <div class="card highligh-secondary text-center py-5">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="fw-bold">4000+</h2>
                        <h6>Course</h6>
                    </div>
                    <div class="col-md-4 border-left">
                        <h2 class="fw-bold">75+</h2>
                        <h6>UK University</h6>
                    </div>
                    <div class="col-md-4 border-left">
                        <h2 class="fw-bold">5000+</h2>
                        <h6>Admission Success</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Why Choose section End --}}
@endsection