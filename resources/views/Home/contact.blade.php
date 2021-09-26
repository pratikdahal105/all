@extends('layouts.app')

@section('content')

{{--  <section class="page-section mt-5" id="contact">--}}
{{--      <h2 class="text-center m-auto font-weight-bold col-md-4 p-3 mb-0 topic text-light">LETS GET IN TOUCH</h2><br>--}}
{{--      <div class="container px-4 px-lg-5">--}}
{{--          <div class="row gx-4 gx-lg-5 justify-content-center">--}}
{{--              <div class="col-lg-8 col-xl-6 text-center">--}}
{{--                  <p class="text-muted mb-5 shade p-2">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--          <div class="row gx-4 gx-lg-5 justify-content-center mb-5">--}}
{{--              <div class="col-lg-6">--}}
{{--                  <form id="contactForm" >--}}
{{--                      <!-- Name input-->--}}
{{--                      <div class="form-floating mb-3">--}}
{{--                          <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />--}}
{{--                          <label for="name">Full name</label>--}}
{{--                      </div>--}}
{{--                      <!-- Email address input-->--}}
{{--                      <div class="form-floating mb-3">--}}
{{--                          <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />--}}
{{--                          <label for="email">Email address</label>--}}
{{--                          <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>--}}
{{--                      </div>--}}
{{--                      <!-- Phone number input-->--}}
{{--                      <div class="form-floating mb-3">--}}
{{--                          <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />--}}
{{--                          <label for="phone">Phone number</label>--}}
{{--                      </div>--}}
{{--                      <!-- Message input-->--}}
{{--                      <div class="form-floating mb-3">--}}
{{--                          <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>--}}
{{--                          <label for="message">Message</label>--}}
{{--                      </div>--}}
{{--                      <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button></div>--}}
{{--                  </form>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--          <div class="row gx-4 gx-lg-5 justify-content-center">--}}
{{--              <div class="col-lg-4 text-center mb-5 mb-lg-0">--}}
{{--                  <i class="bi-phone fs-2 mb-3 text-muted"></i>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      </div>--}}

{{--  </section>--}}

    <style>
        #news {
            background-image: url("images/contact-background.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        .shade{
            width: 100%;
            height: 100%;
            background: rgba(251, 255, 251, 0.9);
        }
    </style>
    <section class="text-justify mt-5 pb-5 container" id="news">
        <div style="padding: 30px;">
            <h2 class="text-center m-auto font-weight-bold col-md-10 p-3 mb-0 topic text-light">@lang('content.contact_topic')</h2><br>
            <div class="col-md-10 p-4 m-auto" >
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10 col-xl-10 text-center">
                        <p class="text-muted mb-5 shade p-2">@lang('content.contact_header')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 m-auto p-4" style="background-color: white">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <form id="contactForm" action="{{route('contact_mail')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="check" />
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required />
                        <label for="name">@lang('content.contact_name')</label>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                        <label for="email">@lang('content.contact_email')</label>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" required />
                        <label for="phone">@lang('content.contact_phone')</label>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                        <label for="message">@lang('content.contact_message')</label>
                    </div>
                    <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">@lang('content.contact_submit')</button></div>
                </form>
            </div>
            <div class="mt-3 d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3264.742981208082!2d137.15031561519964!3d35.08815408033682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004a140233b677f%3A0x35c9fd6b9cee5388!2sYAMATO%20BLDG!5e0!3m2!1sen!2snp!4v1627972720922!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

@endsection
