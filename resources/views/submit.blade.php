{{--@extends('layouts.master')--}}

{{--@section('title', 'Welcome to Mates Global')--}}
{{--@section('meta_description', 'Mates Global is the recruitment agency very much popular in Sydney Markets. We understand the demand And the employers need in their business Effectively bridging the gap between the job seekers and employers.')--}}
{{--@section('image', 'http://matesglobal.com/images/mg.png')--}}


{{--@section('content')--}}
{{--<section>--}}
{{--      <div class="pages-header-specialisation">--}}
{{--      </div>--}}
{{--  </section>--}}
{{--<section>--}}
{{--  <div class="submit-page">--}}
{{--    <div class="container">--}}
{{--      <h3>Submit Your Job Vacancy</h3>--}}
{{--      <p>Please fill in the following details below to submit your stuff requirement.</p>--}}
{{--      <form>--}}
{{--          <div class="form-group">--}}
{{--            <label for="companyname">Company Name</label>--}}
{{--            <input type="text" class="form-control" id="companyname" aria-describedby="emailHelp" placeholder="Company Name">--}}
{{--          </div>--}}
{{--          <div class="form-group">--}}
{{--            <label for="emailaddress">Your Email Address</label>--}}
{{--            <input type="email" class="form-control" id="emailaddress" placeholder="Your Email Address">--}}
{{--          </div>--}}
{{--          <div class="form-group">--}}
{{--              <label for="phonenumber">Phone Number</label>--}}
{{--              <input type="text" class="form-control" id="phonenumber" placeholder="Phone Number">--}}
{{--          </div>--}}
{{--          <h3>Job Details:</h3>--}}
{{--          <div class="form-group">--}}
{{--              <label for="exampleFormControlSelect1">Type of employment</label>--}}
{{--              <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                <option>Full Time</option>--}}
{{--                <option>Part Time</option>--}}
{{--                <option>Casual</option>--}}
{{--                <option>On Call</option>--}}
{{--              </select>--}}
{{--            </div>--}}
{{--          <div class="form-group">--}}
{{--              <label for="jobtitle">Job title descriptionr</label>--}}
{{--              <input type="text" class="form-control" id="jobtitle" placeholder="Job title">--}}
{{--          </div>--}}
{{--          <div class="form-group">--}}
{{--              <label for="employee">Number of employees</label>--}}
{{--              <input type="text" class="form-control" id="employee" placeholder="Number of employees">--}}
{{--          </div>--}}
{{--          <div class="form-group">--}}
{{--              <label for="jobweek">Hours required per week</label>--}}
{{--              <input type="text" class="form-control" id="jobweek" placeholder="Hours required per week">--}}
{{--          </div>--}}
{{--          <div class="form-group">--}}
{{--              <label for="commencement">Commencement date</label>--}}
{{--              <input type="text" class="form-control" id="commencement" placeholder="Commencement date">--}}
{{--          </div>--}}
{{--          <div class="form-group">--}}
{{--              <label for="requirements">Other Requirements</label>--}}
{{--              <input type="text" class="form-control" id="requirements" placeholder="Other Requirements">--}}
{{--          </div>--}}
{{--          <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</section>--}}
{{--@endsection--}}








@extends('layouts.master')

@section('title', 'Welcome to Mates Global')
@section('meta_description', 'Mates Global is the recruitment agency very much popular in Sydney Markets. We understand the demand And the employers need in their business Effectively bridging the gap between the job seekers and employers.')
@section('image', 'http://matesglobal.com/images/mg.png')


@section('content')
    @include ('layouts.includes.asides.slogan')
    <header class="py-5 page-header-image" style="background-image: url('{{asset('images/page-images/candidate-search2.jpg')}}');">
        {{--        <img class="img-fluid d-block mx-auto" src="{{asset('images/logo/logo.png')}}" alt="Approach">--}}
    </header>

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-8 column">
                <div class="service-detail employers">
                    <div class="content-block">
                        <div class="container">
                            <h1>Submit Your Job Vacancy</h1>
                            <img src="{{asset('/images/page-images/candidate-search2.jpg')}}" alt="">

                            <div class="submit-page">
                                <div class="container">

                                    <p>Please fill in the following details below to submit your stuff requirement.</p>
                                    <form>
                                        <div class="form-group">
                                            <label for="companyname">Company Name</label>
                                            <input type="text" class="form-control" id="companyname" aria-describedby="emailHelp" placeholder="Company Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailaddress">Your Email Address</label>
                                            <input type="email" class="form-control" id="emailaddress" placeholder="Your Email Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="phonenumber">Phone Number</label>
                                            <input type="text" class="form-control" id="phonenumber" placeholder="Phone Number">
                                        </div>
                                        <h3>Job Details:</h3>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Type of employment</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Full Time</option>
                                                <option>Part Time</option>
                                                <option>Casual</option>
                                                <option>On Call</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle">Job title descriptionr</label>
                                            <input type="text" class="form-control" id="jobtitle" placeholder="Job title">
                                        </div>
                                        <div class="form-group">
                                            <label for="employee">Number of employees</label>
                                            <input type="text" class="form-control" id="employee" placeholder="Number of employees">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobweek">Hours required per week</label>
                                            <input type="text" class="form-control" id="jobweek" placeholder="Hours required per week">
                                        </div>
                                        <div class="form-group">
                                            <label for="commencement">Commencement date</label>
                                            <input type="text" class="form-control" id="commencement" placeholder="Commencement date">
                                        </div>
                                        <div class="form-group">
                                            <label for="requirements">Other Requirements</label>
                                            <input type="text" class="form-control" id="requirements" placeholder="Other Requirements">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>


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



