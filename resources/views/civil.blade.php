@extends('layouts.master')

@section('title', 'Welcome to Mates Global')
@section('meta_description', 'Mates Global is the recruitment agency very much popular in Sydney Markets. We understand the demand And the employers need in their business Effectively bridging the gap between the job seekers and employers.')
@section('image', 'http://matesglobal.com/images/mg.png')


@section('content')
    @include ('layouts.includes.asides.slogan')
    <header class="py-5 page-header-image" style="background-image: url('{{asset('images/page-images/civil.jpg')}}');">
        {{--        <img class="img-fluid d-block mx-auto" src="{{asset('images/logo/logo.png')}}" alt="Approach">--}}
    </header>

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-8 column">
                <div class="service-detail employers">
                    <div class="content-block">
                        <div class="container">
                            <h1>Civil/Infrastructure Skilled Workers</h1>
                            <img src="{{asset('/images/page-images/civil2.jpg')}}" alt="">

                                <ul>
                                    <li>Surveyor</li>
                                    <li>Chemical engineer</li>
                                    <li>Materials engineer</li>
                                    <li>Civil engineer</li>
                                    <li>Quantity surveyor</li>
                                    <li>Structural engineer</li>
                                    <li>Transport engineer</li>
                                    <li>Electrical engineer</li>
                                    <li>Electronics engineer</li>
                                    <li>Industrial engineer</li>
                                    <li>Mechanical engineer</li>
                                    <li>Draftsperson</li>
                                    <li>Technician</li>
                                </ul>
                                <form>
                                    <label for="basic-url" class="form-label">Job Categories</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select" id="exampleFormControlSelect1">
                                            <option>Categories</option>
                                            <option value="Surveyor">Surveyor</option>
                                            <option value="Chemical engineer">Chemical engineer</option>
                                            <option value="Materials engineer">Materials engineer</option>
                                            <option value="Civil engineer">Civil engineer</option>
                                            <option value="Quantity surveyor">Quantity surveyor</option>
                                            <option value="Structural engineer">Structural engineer</option>
                                            <option value="Transport engineer">Transport engineer</option>
                                            <option value="Electrical engineer">Electrical engineer</option>
                                            <option value="Electronics engineer">Electronics engineer</option>
                                            <option value="Industrial engineer">Industrial engineer</option>
                                            <option value="Mechanical engineer">Mechanical engineer</option>
                                            <option value="Draftsperson">Draftsperson</option>
                                            <option value="Draftsperson">Draftsperson</option>
                                        </select>
                                    </div>
                                    <label for="basic-url" class="form-label">Company Name</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="companyname" aria-describedby="emailHelp" placeholder="Company Name">
                                    </div>
                                    <label for="basic-url" class="form-label">Your Email Address</label>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" id="emailaddress" placeholder="Your Email Address">
                                    </div>
                                    <label for="basic-url" class="form-label">Phone Number</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="phonenumber" placeholder="Phone Number">
                                    </div>
                                    <h2>Job Details:</h2>
                                    <label for="basic-url" class="form-label">Type of employment</label>
                                    <div class="input-group mb-3">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Full Time</option>
                                            <option>Part Time</option>
                                            <option>Casual</option>
                                            <option>On Call</option>
                                        </select>
                                    </div>
                                    <label for="basic-url" class="form-label">Job title description</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="jobtitle" placeholder="Job title">
                                    </div>
                                    <label for="basic-url" class="form-label">Number of employees</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="employee" placeholder="Number of employees">
                                    </div>
                                    <label for="basic-url" class="form-label">Hours required per week</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="jobweek" placeholder="Hours required per week">
                                    </div>
                                    <label for="basic-url" class="form-label">Commencement date</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="commencement" placeholder="Commencement date">
                                    </div>
                                    <label for="basic-url" class="form-label">Other Requirements</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="requirements" placeholder="Other Requirements">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                                </form>


                            <div class="essential-information employers-color">
                                <p style="text-align: left;"><strong>To find out more about using our web services and web network, call us on <a href="tel:+61468429964">04 6842 9964</a>&nbsp;to speak with one of our helpful team, or <a href="/contact" title="Contact Us">contact us</a>.</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 column">
                @include ('layouts.includes.asides.enquires')
                @include ('layouts.includes.asides.page-links')
            </div>
        </div>
    </div>
@endsection


