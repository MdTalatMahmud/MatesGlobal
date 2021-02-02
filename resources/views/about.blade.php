@extends('layouts.master')

@section('title', 'Welcome to Mates Global')
@section('meta_description', 'Mates Global is the recruitment agency very much popular in Sydney Markets. We understand the demand And the employers need in their business Effectively bridging the gap between the job seekers and employers.')
@section('image', 'http://matesglobal.com/images/mg.png')


@section('content')
    @include ('layouts.includes.asides.slogan')
    <header class="py-5 page-header-image" style="background-image: url('{{asset('images/page-images/about-us.jpg')}}');">
        {{--        <img class="img-fluid d-block mx-auto" src="{{asset('images/logo/logo.png')}}" alt="Approach">--}}
    </header>

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-8 column">
                <div class="service-detail employers">
                    <div class="content-block">
                        <div class="container">
                            <h1>About Us</h1>
                            <img src="{{asset('/images/page-images/about-us2.jpg')}}" alt="">

                            <h2>Our Approach</h2>
                            <p>Mates Global has been an active participant in the Australian recruitment industry for the past 8 years. With five offices across three continents, We are an established global recruitment agency that recognises and understands the needs of its clients. As an Australian-based company with offices in Australia and across the globe, Mates Global attracts international high skilled workers to fulfil the local skill shortages in Australia, New Zealand and Canada.</p>

                            <h2>Our Vision And Values</h2>
                            <p>Mates Global is committed to providing efficient and reliable staff to Clients. Our vison is to become one of the best recruitment companies in Australia and have a vast network of international contacts to attract high skilled workers to join national job opportunities. We are an ethical recruitment agency that upholds its responsibility as a non-discriminatory, fair and safety- focused agency. We also keep abreast of the latest industry rules & regulations as well as ensuring that we comply with the Fair Work Act. Our vision and values apply equally to applicants, recruited staff and our Clients.</p>

                            <h2>Our Commitment</h2>
                            <p>We are committed to excellence, accountability and maintaining our position as a trusted recruitment agency. Whether you are a small or large organisation, Mates Global can and will find you the best-fit staff to help you achieve your business growth goals. We specialise in looking for active candidates that are able & willing to work in casual, contract and permanent roles.</p>

                            <h2>Our Team</h2>
                            <p>Mates Global employs an expert team of experienced personnel that have, and continually acquire, knowledge on current market trends and the employment requirements of our key industries of focus. The following categories of personnel at Mates Global combine their efforts to deliver the best possible services:</p>
                            <ul>
                                <li>Hr Solutions Team</li>
                                <li>Market Research Team</li>
                                <li>Accounting Team</li>
                                <li>Data And Roster Management Team</li>
                                <li>Business Development Team</li>
                                <li>Global Business Management Team</li>
                                <li>Legal Team</li>
                                <li>Applicant Interview Team</li>
                                <li>Document And Certification Checking Team</li>
                                <li>Training, Induction And Skills Team</li>
                            </ul>


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
