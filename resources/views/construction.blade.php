@extends('layouts.master')

@section('title', 'Welcome to Mates Global')
@section('meta_description', 'Mates Global is the recruitment agency very much popular in Sydney Markets. We understand the demand And the employers need in their business Effectively bridging the gap between the job seekers and employers.')
@section('image', 'http://matesglobal.com/images/mg.png')


@section('content')
<section>
      <div class="pages-header">
      </div>
</section>
<section>
    <div class="page-services">
        <div class="container">
            <h1>Construction skilled workers</h1>
            <ul>
                <li>Construction project manager</li>
                <li>Landscape architect</li>
                <li>Electrical engineer</li>
                <li>Draft person</li>
                <li>Electrician (general)</li>
                <li>Electrician (special class)</li>
                <li>Welder (first class)</li>
                <li>Fitter (General)</li>
                <li>Carpenter and Joiner</li>
                <li>Painting trades workers</li>
                <li>Fibrous plasterer</li>
                <li>Solid plasterer</li>
                <li>Plumber (general)</li>
            </ul>
            <form>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Job Categories</label>
              <select class="form-control" id="exampleFormControlSelect1">
              <option>Categories</option>
                <option value="Construction project manager">Construction project manager</option>
                <option value="Landscape architect">Landscape architect</option>
                <option value="Electrical engineer">Electrical engineer</option>
                <option value="Draft person">Draft person</option>
                <option value="Electrician (general)">Electrician (general)</option>
                <option value="Electrician (special class)">Electrician (special class)</option>
                <option value="Welder (first class)">Welder (first class)</option>
                <option value="Carpenter and Joiner">Carpenter and Joiner</option>
                <option value="Painting trades workers">Painting trades workers</option>
                <option value="Fibrous plasterer">Fibrous plasterer</option>
                <option value="Plumber (general)">Plumber (general)</option>
              </select>
            </div>
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
          </div><!-- container -->
        </div><!-- fruit-vegetables -->

    </section>
@endsection






