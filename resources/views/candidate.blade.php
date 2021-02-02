@extends('layouts.master')

@section('title', 'Welcome to Mates Global')
@section('meta_description', 'Mates Global is the recruitment agency very much popular in Sydney Markets. We understand the demand And the employers need in their business Effectively bridging the gap between the job seekers and employers.')
@section('image', 'http://matesglobal.com/images/mg.png')


@section('content')
    @include ('layouts.includes.asides.slogan')
    <header class="py-5 page-header-image" style="background-image: url('{{asset('images/page-images/candidate-search3.jpg')}}');">
        {{--        <img class="img-fluid d-block mx-auto" src="{{asset('images/logo/logo.png')}}" alt="Approach">--}}
    </header>

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-8 column">
                <div class="service-detail employers">
                    <div class="content-block">
                        <div class="container">
                            <h1>Candidate Search</h1>
                            <img src="{{asset('/images/page-images/candidate-search2.jpg')}}" alt="">


                            <p>Mates Global is a unique feature offering its business alliance globally particularly to those in India, Pakistan, Bangladesh, Sri Lankan, South Africa, Philippines, the UAE, Thailand, China, Canada, Russia, UK and USA employers and employees looking for job and business opportunities in Australia and new zeland. We have a team of experienced recruitment personnel and MARA agents who will assist you in getting the right candidate and take the responsibility of the logistics in bringing the candidate to Australia with the help of various Immigration services and solutions we offer.</p>
                            <p>If you are an Australian employer who wishes to fill a job vacancy from overseas, by employing an employee who is not an Australian citizen or permanent resident. Depending on your employment requirement short term or long term and the type of candidates to serve your business. The best talented and more efficient candidates are in abundant, there is no dearth for skills and talent all the over the world. Please contact us for more information.</p>

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

