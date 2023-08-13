@extends('layouts.app')
@section('content')
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
                        <img src="{{ asset('front/img/home/Mobile app store badge.png') }}" class="img-fluid pe-3" alt="...">
                        <img src="{{ asset('front/img/home/Mobile app store badge-1.png') }}" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
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
@endsection