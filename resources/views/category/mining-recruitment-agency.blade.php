@extends('layouts.master')

@section('title', 'Mining Recruitment Agency Perth | Mining Labour Hire WA & Brisbane')
@section('meta_description', 'Mates Global provides mining labour-hire services in Perth, Western Australia, Brisbane and New South Wales.')
@section('image', 'http://matesglobal.com/images/mg.png')


@section('content')
    @include ('layouts.includes.asides.slogan')
    <header class="py-5 page-header-image" style="background-image: url('{{asset('images/category-images/mining-recruitment.jpg')}}');">
        {{--        <img class="img-fluid d-block mx-auto" src="{{asset('images/logo/logo.png')}}" alt="Approach">--}}
    </header>

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-8 column">
                <div class="service-detail employers">
                    <div class="content-block">
                        <div class="container">
                            <h1>Are You Seeking Mining, Oil & Resources Recruitment Agency in Perth & WA?</h1>
                            <img src="{{asset('/images/category-images/mining-recruitment2.jpg')}}" alt="">

                            <p>The mining, energy, and resources sectors are some of the important economic sectors of Australia. In the national economy and the job market, these industries play an important part. </p>
                            <p>To have the best people with particular demands, we partner with global mining and development firms, oil companies, manufacturing companies, and several other organizations.  </p>
                            <p>Our recruiting experts are here to assist, whether you are searching for qualified employees to join your staff on-site or at your executive office headquarters. We provide specialists who can provide diverse support or specialized expertise based on the requirements of your organization.</p>
                            <p>Our advisors may also provide insights into the market outlook and advice on smart recruiting practices as part of our customized recruitment program.</p>
                            <p>If you are hunting for a management firm for mining, energy & services with real industry experience, contact the Mates Global team today. Our expert team will help you in hiring and enlisting the right person for your company.</p>
                            <p>Our office administration team is very cooperative and helpful to our honorable clients with high activeness. Our team consists of potential consultants, account managers, and service staff who provide account management, payment, and invoicing in a timely and efficient manner. We provide you strong candidates who have experience with working on coal mine, ore, quarry, pit, strip mine, coal, colliery, underground, and excavation. Therefore, if you are searching for mining recruitment WA, NSW, Perth, Brisbane, and in the other sites of Australia you can feel free to contact our team.</p>
                            <h2>Are You Looking for Mining Jobs in Perth, WA, Brisbane, Or NSW?</h2>
                            <p>If you have experience in mineshaft or mining job sectors and currently seeking jobs then enroll your name with us. We invite people to give us your CV and provide people with the right job the candidate is looking for. You can make your career as a:</p>
                            <ul>
                                <li>Project Managers</li>
                                <li>Process Managers</li>
                                <li>Operation Managers</li>
                                <li>Process Technicians</li>
                                <li>Mining Engineers - Electrical, Mining, Drill, and blast</li>
                                <li>Metallurgy </li>
                                <li>Miner</li>
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

