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
                            <h1>Our Specialisation</h1>

                            <div class="container">

                                <img src="{{asset('/images/page-images/specialisation.jpg')}}" alt="">
                                <p>Mates Global specialises in recruitment for both Australian and international requirements. We seek to attract special skilled workers from all over the world to fill our local skill shortages in Australia. One of the main contributions of our company is to have the right kind of staff who help to achieve our clients goals in the business. We offer services for the specialised workforce solutions through the delivery of flexible labour and skilled manpower. Some of the categories which we recruitment for include:</p>
                                <ul>
                                    <li>Skilled Construction Workers</li>
                                    <li>Civil/Infrastructure Skilled Workers</li>
                                    <li>Ship and Submarine Building workers</li>
                                    <li>Powerplant Skilled workers</li>
                                    <li>Mining Skilled workers</li>
                                </ul>

                                <h2>SKILLED CONSTRUCTION WORKERS</h2>
                                <p>Mates global supply skilled construction workers to various sites from around the world. We hire international high skilled workers, allocating them to jobs to fill local shortages. Mates provide construction services managing and developing production.</p>
                                <p><strong>Why choose us?</strong><br>Mates Global provide superior carpentry, labour and building components to the commercial construction industry with a team of qualified and experienced members. Sourcing high skilled workers from overseas allow a person with a different perspective to be able to contribute in projects.</p>

                                <h2>CIVIL/INFRASTRUCTURE SKILLED WORKERS</h2>
                                <p>Mates Global source skilled workers for various civil/infrastructure needs.</p>
                                <p><strong>Why choose us?</strong><br>All our provided workers are either educated in that particular area or hold a lot of experience in the job field.

                                <h2>SHIP AND SUBMARINE BUILDING WORKERS</h2>
                                <p>Mates Global provide ship and submarine building facilities with the assistance of highly qualified employees who specialise in the field.</p>
                                <p><strong>Why choose us?</strong><br>Our aim is to provide customers with outstanding value through quality ship construction and repair services that are delivered on schedule, while setting the industry standard for operational reliability and maintainability. We have qualified staff who finish the job to perfection.</p>

                                <h2>POWERPLANT SKILLED WORKERS</h2>
                                <p>Mates global source and recruit highly skilled powerplant staff. Whether you need a qualified powerplant worker for long term or short term, we can provide.</p>
                                <p><strong>Why choose us?</strong><br>Our services are fast and effective, this allows our clients to achieve their project objectives and rely on us to find suitable staff.</p>

                                <h2>MINING SKILLED WORKERS</h2>
                                <p>Mates Global supply international mine workers to companies who require special skills for their important projects. The candidates come from experienced backgrounds, and are highly capable of meeting goals.</p>
                                <p><strong>Why choose us?</strong><br>We ensure satisfaction. Our team at Mates Global are specialised in selecting only the best possible candidates to work for our clients.</p>


                                <div class="essential-information employers-color">

                                    <p style="text-align: left;"><strong>To find out more about using our web services and web network, call us on <a href="tel:+61468429964">04 6842 9964</a>&nbsp;to speak with one of our helpful team, or <a href="/contact" title="Contact Us">contact us</a>.</strong></p>
                                </div>
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


