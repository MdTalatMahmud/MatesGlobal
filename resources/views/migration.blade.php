@extends('layouts.master')

@section('title', 'Welcome to Mates Global')
@section('meta_description', 'Mates Global is the recruitment agency very much popular in Sydney Markets. We understand the demand And the employers need in their business Effectively bridging the gap between the job seekers and employers.')
@section('image', 'http://matesglobal.com/images/mg.png')


@section('content')
    @include ('layouts.includes.asides.slogan')
    <header class="py-5 page-header-image" style="background-image: url('{{asset('images/page-images/migration.jpg')}}');">
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


                            <div class="about-page-block">
                                <h3>Corporate Migration</h3>
                                <p>If you intend to look for the right person globally, we can help you hire the skilled candidate under Working Holiday Visa and Seasonal Workers program. We have the expertise to search the right candidate overseas and provide you with enhanced facilities and assist you in fulfilling the shortage of staff. Seasonal Worker program is very popular and is targeted for short term employment especially for Agriculture industry in country side.</p>
                            </div>
                            <div class="about-page-block">
                                <h3>WORKING HOLIDAY VISA</h3>
                                <p>The Working Holiday visa (subclass 417) lets an eligible candidate to work in Australia for up to a year, it is a great opportunity for overseas candidates to visit Australia and expose for a better life style and upgrade skills in a competitive work environment.</p>
                            </div>
                            <div class="about-page-block">
                                <h3>SEASONAL WORKER PROGRAM</h3>
                                <p>This is a unique program offered by Australian government to fulfil the shortage of skilled employees to work for short time during the harvest periods. We offer complete packaged services for Seasonal Worker Program to submit the expression of interest on behalf of the employer/organisation to the immigration department and process the sponsorship including the labour market test and get the grant of sponsorship for the organisation.</p>
                                <p>We take the responsibility in shortlisting the overseas candidates by conducting personal interview, skill tests and conduct checking for the eligibility of the positions. If necessary the candidates are given on job training before the start of the work and assist them with work place safety procedures induction methods. We also extend our services for settlement and welfare of the candidates.</p>
                            </div>
                            <div class="about-page-block">
                                <h3>THE INDUSTRIES WE WORK UNDER THE SEASONAL WORKER PROGRAM ARE:</h3>
                                <ul>
                                    <li>Agriculture industry – Harvest Work</li>
                                    <li>Cane Work – Process workers</li>
                                    <li>Cotton Work</li>
                                    <li>Aquaculture work</li>
                                    <li>Accommodation Industry</li>
                                </ul>
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


