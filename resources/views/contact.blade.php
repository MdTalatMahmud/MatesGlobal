@extends('layouts.master')

@section('title', 'Welcome to Mates Global')
@section('meta_description', 'Mates Global is the recruitment agency very much popular in Sydney Markets. We understand the demand And the employers need in their business Effectively bridging the gap between the job seekers and employers.')
@section('image', 'http://matesglobal.com/images/mg.png')



@section('content')
<section>
    <div class="pages-header-specialisation">
    </div>
</section>
<section>
    <div class="contact-page-body">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="location-design">
                    <h2>CONTACT US</h2>
                    <ul>
                        <li>Level 1, Suite 11/35-39 Auburn Road</li>
                        <li>Auburn New South Wales 2144</li>
                        <li>Australia</li>
                        <li>Tel: 02 87333549</li>
                        <li>Fax: 02 94236947</li>
                        <li>Email: info@matesglobal.com</li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d348.28800689763625!2d151.0328069337571!3d-33.85119350948275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bcb1a7b9168b%3A0x9b513692dc17d3dd!2sLevel+1%2C+Suite+11%2F35-39+Auburn+Rd%2C+Auburn+NSW+2144%2C+Australia!5e0!3m2!1sen!2sbd!4v1559209635952!5m2!1sen!2sbd" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>
            <div class="col-md-6">
                <div class="location-design contact-block-new">
                    <h2>Send your Message</h2>
                    <div class="location-design-input" id="feedbackForm">
                        @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
              @endif
              @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form method="post" action="{{ route('feedbackForm.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="">Your company name:<span style="color:red">*</span></label>
                                <input class="form-control" name="name"  type="text" placeholder="Company name" require>
                            </div>
                            <div class="form-group">
                                <label for="">Your email address:<span style="color:red">*</span></label>
                                <input class="form-control" name="email" type="email" placeholder="Company name" require>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone number:</label>
                                <input class="form-control" name="phone" type="text" placeholder="Phone number">
                            </div>
                            <div class="form-group">
                                <label for="">Message:</label>
                                <textarea class="form-control" name="message" placeholder="Please type message here..."></textarea>
                            </div>
                            <div class="form-group subm-con">
                                <input class="form-control" type="submit">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
      </div><!-- container -->
    </div><!-- contact-page-body -->
</section>
@endsection
