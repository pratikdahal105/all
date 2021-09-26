@extends('layouts.app')

@section('content')
    <style>
        #CEO {
            background-image: url("images/ceoBackground.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        #news {
            background-image: url("images/news-background.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        .shade{
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
        }
        #top_card{
            background: rgba(4, 2, 47, 0.76);
            /*background-color: #04023d;*/
            color: white;
        }
        #view_button {
            color: white;
            font-weight: bold;
        }
    </style>
  <!-- Icons Grid-->
  <section class="features-icons text-center">
      <div class="container">
          <div class="row">
              <div class="col-lg-5 card mr-auto" id="top_card">
                  <div class="features-icons-item mx-auto p-5">
                      <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-light fas fa-building"></i></div>
                      <h3>@lang('content.index_employer')</h3>
                      <a href="{{ route('employerData') }}"><button type="button" id="view_button" class="btn btn-outline-success">@lang('content.index_view')</button></a>
                  </div>
              </div>
              <div class="col-lg-5 card ml-auto" id="top_card">
                  <div class="features-icons-item mx-auto p-5">
                      <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-light fas fa-users"></i></div>
                      <h3>@lang('content.index_employee')</h3>
                      <a href="{{ route ('employeeData') }}"><button type="button" id="view_button" class="btn btn-outline-success">@lang('content.index_view')</button></a>
                  </div>
              </div>
          </div>
      </div>
  </section>


  <section class="features-icons text-center" style="margin-top: -100px;">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 card m-auto"  id="top_card">
                  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 p-5">
                      <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-light fas fa-gifts"></i></div>
                      <h3>@lang('content.index_products')</h3>
                      <a href="#"><button type="button" id="view_button" class="btn btn-outline-success">@lang('content.index_view')</button></a>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="text-justify mt-5 pb-5 container" id="CEO">
      <div class="shade" style="padding: 30px;">
          <div class="col-md-2 d-flex mb-2 ml-auto">
              <img class="rounded-circle" src="{{asset('images/ceo.jpg')}}" width="200" height="250">
          </div>
            <h2 class="text-center pt-3" style="color: white">@lang('content.index_message_topic')</h2>
          <hr class="divider"/>
          <div class="col-md-8 p-4 m-auto" style="background-color: white">
              <h3 class="text-center">@lang('content.index_message_header')</h3>
              <div class="text-justify pb-5 d-flex justify-content-center">
                  <p>@lang('content.index_message')<br>
{{--                      <span style="float: right"><img class="rounded-circle" src="{{asset('images/stamp.png')}}" width="40" height="40"></span>--}}
                      <span style="float: right">@lang('content.index_message_credit')</span><br><br>
                  </p>
              </div>
          </div>
      </div>
  </section>
    <section class="text-justify mt-5 pb-5 container" id="news">
        <div class="shade" style="padding: 30px;">
            <h2 class="text-center pt-3" style="color: white">@lang('content.news_topic')</h2>
            <hr class="divider"/>
            <div class="col-md-10 p-4 m-auto" style="background-color: white">
                <div class="col-md-12 p-4 m-auto">
                    <h4 class="text-center pt-3">@lang('content.news_topic0')</h4><br>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/XuvcuUfcQIY">
                    </iframe>
                </div>
                <div class="text-justify pb-5 d-flex justify-content-center" style="width: 100%; height:100%;">
                    <img class="mx-auto d-block img-fluid" src="{{ asset('images/news/news.png') }}" alt="">
                </div>
                <div class="col-md-12 p-4 m-auto">
                    <h4 class="text-center pt-3">@lang('content.news_topic1')</h4><br>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/Kb7J9c_9uSM">
                    </iframe>
                    <h4 class="text-center pt-3 mt-5 pt-5">@lang('content.news_topic2')</h4><br>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/K1oHk0lszxs">
                    </iframe>
                </div>
            </div>
        </div>
    </section>


@endsection
