<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{@$setting->$title}}</title>

    @include('dashboard.layouts.meta_tags_social')

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{URL::to('/site')}}/css/bootstrap.min.css?<?= time() ?>" rel="stylesheet">
    <link href="{{URL::to('/site')}}/css/all.min.css?<?= time() ?>" rel="stylesheet">
    <link href="{{URL::to('/site')}}/css/custom.css?<?= time() ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>



  <section class="coming-soon text-center">

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-6 counter-block">
            <div class="coming-soon-heading"> @lang('home.we_are_coming_soon') </div> 
            <hr>
            <p class="lead">@lang('home.welcome_to_our_community')</p>

          <div class="counter-details col-xs-12">
            <div class="col-md-3 col-xs-6">
              <span id="days">00</span>
              <span>@lang('home.days')</span>
            </div>
            <div class="col-md-3 col-xs-6">
              <span id="hours">01</span>
              <span>@lang('home.hours')</span>
            </div>
            <div class="col-md-3 col-xs-6">
              <span id="minutes">25</span>
              <span>@lang('home.minutes')</span>
            </div>
            <div class="col-md-3 col-xs-6">
              <span id="seconds">12</span>
              <span>@lang('home.seconds')</span>
            </div>
          </div>

          <div class="col-xs-12 bottom-p">
            <p class="lead2"> @lang('home.our_Website_is_coming_soon') </p>
            <p class="lead2"> @lang('home.Please_register_here_to_be_updated_when_ready') </p>
         </div>

        </div>


        <div class="col-xs-12 col-md-6 form-block">

        <div class="col-xs-12 logo-block">
          <img class="logo-img" src="{{URL::to('/site')}}/images/basma-logo.png">
        </div>

        <div class="col-md-11 col-md-offset-1 col-xs-12">

          <div class="tabs-block">
          @if(Session('success'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <!--<strong>@lang('home.success')!</strong> -->
                {{session('success')}}
            </div>
            @endif     

            <ul>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                   <li>
                       <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                           {{ $properties['native'] }}
                 </a>
               </li>
                @endforeach
            </ul>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#user" aria-controls="user" role="tab" data-toggle="tab">@lang('home.Register_for_user')</a></li>
              <li role="presentation"><a href="#company" aria-controls="company" role="tab" data-toggle="tab">@lang('home.Register_for_company')</a></li>
            </ul>
              
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="user">
              
                   <form method="post" action="{{url('/').'/'.LaravelLocalization::getCurrentLocale().'/user/waiting'}}" accept-charset="utf-8">
                    @csrf
                   <input type="hidden" name="type" value="user" />
                    <div class="form-group">
                        <input type="name" class="form-control" placeholder="@lang('home.name')" name="name" value="{{Request::old('name')}}">
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="@lang('home.email')" name="email" value="{{Request::old('email')}}">
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                     </div>
                    <div class="form-group">
                        <input type="number" class="form-control"  placeholder="@lang('home.phone')" name="phone" value="{{Request::old('phone')}}">
                        <small class="text-danger">{{ $errors->first('phone') }}</small>

                    </div>
                    <div class="form-group">
                        <select name="address" class="form-control">
                        <option value="">@lang('home.address')</option>
                            @foreach($cities as $city)
                                <option value="{{@$city->id}}">{{(App::isLocale('en')  ? @$city->nameEn : @$city->nameAr)}}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('address') }}</small>
                    </div>
                    <button type="submit" class="btn btn-lg contact-btn btn-default">@lang('home.send')</button>
                </form>
              <p class="lead"> @lang('home.We_will_contact_you_once_we_launch') </p>

              </div>
              <div role="tabpanel" class="tab-pane" id="company">
              
              <form method="post" action="{{url('/').'/'.LaravelLocalization::getCurrentLocale().'/user/waiting'}}" accept-charset="utf-8">
              @csrf
              <input type="hidden" name="type" value="company" />
                    <div class="form-group">
                        <input type="name" class="form-control" placeholder="@lang('home.name')" name="name" value="{{Request::old('name')}}">
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="@lang('home.email')" name="email" value="{{Request::old('email')}}">
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                     </div>
                    <div class="form-group">
                        <input type="number" class="form-control"  placeholder="@lang('home.phone')" name="phone" value="{{Request::old('phone')}}">
                        <small class="text-danger">{{ $errors->first('phone') }}</small>

                    </div>
                    <div class="form-group">
                        <select name="address" class="form-control">
                        <option value="null">@lang('home.address')</option>
                            @foreach($cities as $city)
                                <option value="{{@$city->id}}">{{(App::isLocale('en')  ? @$city->nameEn : @$city->nameAr)}}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('address') }}</small>
                    </div>
                    <button type="submit" class="btn btn-lg contact-btn btn-default">@lang('home.send')</button>
                </form>
              <p class="lead"> @lang('home.We_will_contact_you_once_we_launch') </p>

              </div>
            </div>

          </div>

        </div>


        </div>



      </div>
    </div>

  </section>

<script src="{{URL::to('/site')}}/js/jquery-3.4.1.min.js?<?= time() ?>"></script>
<script src="{{URL::to('/site')}}/js/bootstrap.min.js?<?= time() ?>"></script>
<script src="{{URL::to('/site')}}/js/custom.js?<?= time() ?>"></script>

  </body>
</html>




