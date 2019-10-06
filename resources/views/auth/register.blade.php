@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                @if(Session('success'))
                <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>@lang('home.success')!</strong> {{session('success')}}.
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
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#user">
                                    {{ __('user') }}
                                </button>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#company">
                                    {{ __('company') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start model  -->
<div id="company" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <form method="post" action="{{url('/user/waiting')}}">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
      @csrf
        <input type="hidden" name="type" value="company" />
        <div class="form-group">
            <label for="name">@lang('home.name'):</label>
            <input type="text" class="form-control" placeholder="@lang('home.name')" name="name" value="{{Request::old('name')}}">
        </div>
        <div class="form-group">
            <label for="email">@lang('home.email'):</label>
            <input type="email" class="form-control" placeholder="@lang('home.email')" name="email" value="{{Request::old('email')}}">
        </div>
        <div class="form-group">
            <label for="phone">@lang('home.phone'):</label>
            <input type="text" class="form-control" placeholder="@lang('home.phone')" name="phone" value="{{Request::old('phone')}}">
        </div>
        <div class="form-group">
            <label for="address">@lang('home.address'):</label>
            <select name="address"class="form-control">
            <option value="null">@lang('home.select_one')</option>
                @foreach($cities as $city)
                    <option value="{{@$city->id}}">{{(App::isLocale('en')  ? @$city->nameEn : @$city->nameAr)}}</option>
                @endforeach
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('home.close')</button>
        <button type="submit" class="btn btn-primary" >@lang('home.send')</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div id="user" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <form method="post" action="{{url('/user/waiting')}}">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Use Model</h4>
      </div>
      <div class="modal-body">
      @csrf
        <input type="hidden" name="type" value="user" />
        <div class="form-group">
            <label for="name">@lang('home.name'):</label>
            <input type="text" class="form-control" placeholder="@lang('home.name')" name="name" value="{{Request::old('name')}}">
        </div>
        <div class="form-group">
            <label for="email">@lang('home.email'):</label>
            <input type="email" class="form-control" placeholder="@lang('home.email')" name="email" value="{{Request::old('email')}}">
        </div>
        <div class="form-group">
            <label for="phone">@lang('home.phone'):</label>
            <input type="text" class="form-control" placeholder="@lang('home.phone')" name="phone" value="{{Request::old('phone')}}">
        </div>
        <div class="form-group">
            <label for="address">@lang('home.address'):</label>
            <select name="address"class="form-control">
            <option value="null">@lang('home.select_one')</option>
                @foreach($cities as $city)
                    <option value="{{@$city->id}}">{{(App::isLocale('en')  ? @$city->nameEn : @$city->nameAr)}}</option>
                @endforeach
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('home.close')</button>
        <button type="submit" class="btn btn-primary" >@lang('home.send')</button>
      </div>
      </form>

    </div>

  </div>
</div>
<!-- end model  -->
@endsection
