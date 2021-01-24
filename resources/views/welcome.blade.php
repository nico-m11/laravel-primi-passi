@extends('layouts.home')
@section ('main')
<section>
      <div class="jumbotron">
         <div class="container">
         <div class="row">
           <div class="form_text col-xs-12 col-lg-6 col-md-6 col-sm-6">
             <h1>The Simplest cloud platform for developers & teams</h1>
             <p>Deplay, manage, and scale cloud applications fasted and more efficiently on DigitalOcean. We make mananing infrastructure easy for teams and businesses, whether you're running one virtual machine or ten thousand.</p>
          </div>
          <div class="row">
            <div class="form_access col-xs-12 col-md-6 col-sm-6 col-lg-6">
               <h2 class="text-center">Deploy your app in seconds.</h2>
                 <h2 class="text-center cl-bl">Get Started now.</h2>
                <div class="form-group">
                   <label for="exampleInputEmail1">Email address</label>
                   <input type="email" class="form-control style-form" id="exampleInputEmail1" placeholder="Email">
               </div>
               <div class="form-group">
                 <label for="exampleInputName2">Phone number</label>
                 <input type="text" class="form-control style-form" id="exampleInputName2" placeholder="Password">
              </div>
                <button type="button" class="btn btn-primary btn-lg btn-block">Create your account</button>
               <button type="button" class="btn btn-default btn-lg btn-block">Sing up whith Google</button>
               <span class="text-central">By signing up you agree to the <a href="#">Terms of service.</a></span>
            </div>
          </div>
          </div>
          </div>
        </div>
  </section>

@endsection
