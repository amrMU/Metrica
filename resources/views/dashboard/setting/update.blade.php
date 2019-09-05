@extends('dashboard.layouts.main')
@section('content')
        <!-- Main content -->
        <div class="content-wrapper">
                        <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">@lang('home.update')</span> - @lang('home.dashboard')</h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                         </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('ar/admin/home') }}"><i class="icon-home2 position-left"></i> @lang('home.home')</a></li>
                        <li class="active">@lang('home.general_settings')</li>
                    </ul>

                    <ul class="breadcrumb-elements">
                        <!-- <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear position-left"></i>
                                @lang('home.settings')
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                                <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                                <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                                <li class="divider"></li> -->
                              <li><a href="{{ URL::to('ar/admin/setting') }}"><i class="icon-gear"></i>@lang('home.general_settings')</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /page header -->

             <!-- Content area -->
            <div class="content">
                <!-- Form validation -->
                    <div class="panel panel-flat col-md-10">
                        <div class="panel-heading">
                            <h5 class="panel-title">@lang('home.general_settings')</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form class="form-horizontal form-validate-jquery" method="POST" action="{{ URL::to('/admin/setting') }}" enctype='multipart/form-data'>
                                @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $error }}
                                </div>
                                @endforeach
                                @endif
                                @if(Session::has('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ Session::get('success') }}
                                </div>
                                @endif
                                @csrf
                                {{-- general Info --}}
                                <fieldset class="content-group">
                                    <legend class="text-bold">@lang('home.basic_info')</legend>

                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.title_ar') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="title_ar" class="form-control" placeholder="@lang('home.placeholder_text')" value="{{@$info->title_ar}}">
                                        </div>
                                    </div>
                                    <!-- /title ar input -->

                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.title_en') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="title_en" class="form-control"  placeholder="@lang('home.placeholder_text')" value="{{@$info->title_en}}">
                                        </div>
                                    </div>
                                    <!-- /title ar input -->


                                 <!-- content ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.content_ar') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                            <textarea name="content_ar" class="form-control"  placeholder="@lang('home.placeholder_text')">{{@$info->content_ar}}</textarea>
                                        </div>
                                    </div>
                                    <!-- /content ar input -->
                                    <!-- content en input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.content_en') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9"> 
                                            <textarea name="content_en" class="form-control"  placeholder="@lang('home.placeholder_text')">{{@$info->content_en}}</textarea>
                                        </div>
                                    </div>
                                    <!-- /content en input -->                                    
                                    <!-- Meta Tags input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.meta_tags') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="meta_tags" class="form-control tokenfield" value="@lang('home.placeholder_metatags')" value="{{@$info->meta_tags}}">
                                        </div>
                                    </div>
                                    <!-- /Meta Tags input -->
                                    <!-- extirnal code input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.extirnal_code') </label>
                                        <div class="col-lg-9">
                                            <textarea name="extirnal_code" class="form-control"  placeholder="@lang('home.placeholder_code')">{!! @$info->extirnal_code !!}</textarea>
                                        </div>
                                    </div>
                                    <!--/extirnal code input -->
                                    <!-- Logo uploader -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.logo') <span class="text-danger" title="@lang('home.required')"> *</span></label>
                                        <div class="col-lg-9">
                                            <input type="file" name="logo" class="file-styled" >
                                        </div>
                                    </div>
                                    <!-- /Logo uploader -->
                                   <!-- files uploader -->
                                    <!-- <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.file_uploader')</label>
                                        <div class="col-lg-9">
                                            <input type="file" name="external_resources[]" class="file-styled"  multiple>
                                        </div>
                                    </div> -->
                                    <!-- /files uploader -->
                                </fieldset>
                                {{-- general Info --}}
                                {{-- SMTP MAil --}}
                                <fieldset class="content-group">
                                    <legend class="text-bold">@lang('home.smtp_builder')</legend>
                                        <!-- /MAIL_DRIVER field -->
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2">Mail Driver </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="mail_driver" class="form-control" placeholder="Outgoing Server" value="{{@$info->mail_provider_info->MAIL_DRIVER}}" >
                                            </div>
                                        </div>
                                        <!-- /MAIL_DRIVER field -->

                                        <!-- /mail_host field -->
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2">Mail Host</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="mail_host" class="form-control" placeholder="mail.example.com " value="{{@$info->mail_provider_info->MAIL_HOST}}">
                                            </div>
                                        </div>
                                        <!-- /mail_host field -->
                                        <!-- /mail_user_name field -->
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2"> Mail Username</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="mail_username" class="form-control" placeholder="info@example.com" value="{{@$info->mail_provider_info->MAIL_HOST}}" >
                                            </div>
                                        </div>
                                        <!-- /mail_user_name field -->

                                        <!-- /mail_password field -->
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2">Mail Password</label>
                                            <div class="col-lg-9">
                                                <input type="password" name="mail_password" class="form-control"  placeholder="*******" value="{{@$info->mail_provider_info->MAIL_PASSWORD}}" >
                                            </div>
                                        </div>
                                        <!-- /mail_password field -->

                                     <!-- /Mail Port field -->
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2">Mail Port</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="mail_port" class="form-control" placeholder="Port" value="{{@$info->mail_provider_info->MAIL_port}}">
                                            </div>
                                        </div>
                                        <!-- /Mail Port field -->

                                </fieldset>
                                {{-- SMTP MAil --}}

                                {{-- Email --}}
                                <fieldset class="content-group">
                                    <legend class="text-bold">@lang('home.email_departments')</legend>
                                    <!-- Email field -->
                                    <div class="wrap_emails">
                                        <div class="form-group " >
                                            <label class="control-label col-lg-2">@lang('home.email') </label>
                                            <div class="col-lg-5">
                                                <input type="email" name="email[]" class="form-control" id="email" placeholder="@lang('home.email')">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" name="department[]" class="form-control" id="text" placeholder="@lang('home.department')">
                                            </div>
                                            <div class="col-2  m-10">
                                               <button class="btn btn-primary add_new_email"> + </button>
                                            </div>
                                        </div>
                                        <!-- /email field -->
                                        <div id="space_emails">
                                        @if(isset($info))
                                        @foreach($info->emails as $email)
                                        <div class="form-group " >
                                            <label class="control-label col-lg-2">@lang('home.email') </label>
                                            <div class="col-lg-5">
                                                <input type="email" name="email[]" class="form-control" id="email" placeholder="@lang('home.email')" value="{{@$email->email}}">
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="text" name="department[]" class="form-control" id="text" placeholder="@lang('home.department')" value="{{@$email->department}}">
                                            </div>
                                            <div class="col-2  m-10">
                                               <button class="remove_field btn btn-danger">-</button>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </fieldset>
                                {{-- Email --}}
                                
                                {{-- address --}}
                                <fieldset class="content-group">
                                    <legend class="text-bold">@lang('home.company_address')</legend>
                                    <!-- address field -->
                                    <div class="wrap_address">
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2">@lang('home.address') </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="address[]" class="form-control" id="text" placeholder="@lang('home.address')">
                                            </div>
                                            
                                            <div class="col-2  m-10">
                                               <button class="btn btn-primary add_new_address"> + </button>
                                            </div>
                                        </div>
                                        <!-- /address field -->
                                        <div id="space_address">
                                        @if(isset($info))
                                        @foreach($info->address as $address)
                                        <div class="form-group" >
                                            <label class="control-label col-lg-2">@lang('home.address') </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="address[]" class="form-control" id="text" placeholder="@lang('home.address')" value="{{@$address->address_ar}}">
                                            </div>
                                            
                                            <div class="col-2  m-10">
                                            <button class="remove_field btn btn-danger">-</button>
                                            </div>
                                        </div>
                                        @endforeach    
                                        @endif                                        
                                        </div>
                                    </div>
                                </fieldset>
                                {{-- address --}}
                                {{-- phones --}}
                                <fieldset class="content-group">
                                    <legend class="text-bold">@lang('home.phones')</legend>
                                    <!-- phone field -->
                                    <div class="wrap_phones">
                                        <div class="form-group " >
                                            <label class="control-label col-lg-2">@lang('home.phone') </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="phone[]" class="form-control" id="phone"  placeholder="@lang('home.phone')" >
                                            </div>
                                          
                                            <div class="col-2  m-10">
                                               <button class="btn btn-primary add_new_phone"> + </button>
                                            </div>
                                        </div>
                                        <!--/ phone field -->
                                        <div id="space_phones">
                                        @if(isset($info))
                                        @foreach($info->phones as $phone)
                                        <div class="form-group " >
                                            <label class="control-label col-lg-2">@lang('home.phone') </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="phone[]" class="form-control" id="phone"  placeholder="@lang('home.phone')" value="{{@$phone->phone}}">
                                            </div>
                                            <div class="col-2  m-10">
                                            <button class="remove_field btn btn-danger">-</button>
                                            </div>
                                        </div>
                                        @endforeach   
                                        @endif                                         
                                        </div>
                                    </div>
                                </fieldset>
                                {{-- phones --}}
                                {{-- whatsapp --}}
                                <fieldset class="content-group">
                                    <legend class="text-bold">@lang('home.whatsapp_numbers')</legend>
                                    <!-- whatsapp field -->
                                    <div class="wrap_whatsapp">
                                        <div class="form-group " >
                                            <label class="control-label col-lg-2">@lang('home.whatsapp') </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="whatsapp[]" class="form-control" id="whatsapp" placeholder="@lang('home.whatsapp')">
                                            </div>
                                          
                                            <div class="col-2  m-10">
                                               <button class="btn btn-primary add_new_whatsapp"> + </button>
                                            </div>
                                        </div>
                                        <!--/ whatsapp field -->
                                        <div id="space_whatsapp">
                                        @if(isset($info))
                                        @foreach($info->whatsapp as $whatsapp)
                                        <div class="form-group " >
                                            <label class="control-label col-lg-2">@lang('home.whatsapp') </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="whatsapp[]" class="form-control" id="whatsapp" placeholder="@lang('home.whatsapp')" value="{{@$whatsapp->whatsapp}}">
                                            </div>
                                          
                                            <div class="col-2  m-10">                                        
                                            <button class="remove_field btn btn-danger">-</button>
                                            </div>
                                        </div>
                                        @endforeach   
                                        @endif                                                                                     
                                        </div>
                                    </div>
                                </fieldset>
                                {{-- whatsapp --}}
                                {{-- social media  --}}
                                <fieldset class="content-group">
                                    <legend class="text-bold">@lang('home.social_media_generator')</legend>
                                    <!-- social Media field -->
                                    <div class="wrap_social_media">
                                        <div class="form-group" >
                                            <div class="col-lg-2">
                                               <a hreg="#" class="btn btn-primary add_new_social_media"> + </a>
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="text" name="name_media_ar[]" class="form-control" id="title_ar" placeholder="@lang('home.name_ar')"  multiple>
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="text" name="name_media_en[]" class="form-control" id="title_en" placeholder="@lang('home.name_en')"  multiple>
                                            </div>
                                             <div class="col-lg-2">
                                                <input type="text" name="url[]" class="form-control" id="url" placeholder="@lang('home.url')" multiple>
                                            </div>
                                            <div class="col-2">
                                                <input type="file" name="social_logo[]" class="file-styled" multiple>
                                            </div>
                                        </div>
                                        <!-- /social Media field -->
                                        <div id="space_social_media">
                                        @if(isset($info))
                                        @foreach($info->social_media_link as $link)
                                        <div class="form-group" >
                                            <div class="col-lg-2">
                                            <button class="remove_field btn btn-danger">-</button>
                                            </div>
                                            <div class="col-lg-2"> 
                                                <input type="text" name="name_media_ar[]" class="form-control" id="title_ar" placeholder="@lang('home.name_ar')"  multiple  value="{{@$link->name_ar}}">
                                            </div>
                                            <div class="col-lg-2">
                                                <input type="text" name="name_media_en[]" class="form-control" id="title_en" placeholder="@lang('home.name_en')"  multiple value="{{@$link->name_en}}" >
                                            </div>
                                             <div class="col-lg-2">
                                                <input type="text" name="url[]" class="form-control" id="url" placeholder="@lang('home.url')" multiple value="{{@$link->url}}" >
                                            </div>
                                            <div class="col-2">
                                                <input type="file" name="social_logo[]" class="file-styled" multiple>
                                            </div>
                                        </div>
                                        @endforeach                                                                                        
                                        @endif
                                        </div>
                                    </div>
                                </fieldset>
                                {{-- social media  --}}

                                <div class="text-right">
                                    <button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
                                    <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-left13 position-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form validation -->
                    <div class="col-md-2">
                    @if(isset($setting))
                    <img src="{{url('/').@$info->logo}}" class="img-responsive" style="max-width:100%" >
                    @endif
                    </div>
                    @if(isset($info))                    
                    @foreach($info->external_resources as $file)
                    <div class="col-md-2">
                    <a href="{{@$file->file}}" target="_blank">
                        <img src="{{asset('/img/code.svg')}}" style="height: 70px; margin: 0 30px;" class="img-responsive">
                    </a>
                    <small class="text-center">
                        @include('dashboard.setting.external_delete_model')
                    </small>
                    </div>
                    @endforeach
                    @endif
            </div>
             <!-- Content area -->

        </div>
        <!-- Main content -->
@stop

@section('jsCode')
    <script>
   //start email generator
   var wrap_emails = $(".wrap_emails>#space_emails");
   var add_new_email = $(".add_new_email");
   $(add_new_email).click(function (e) {
    e.preventDefault();
    $(wrap_emails).append('<div class="form-group" ><label class="control-label col-lg-2">@lang('home.email') </label><div class="col-lg-5"><input type="email" name="email[]" class="form-control" id="email" placeholder="@lang('home.email')"></div><div class="col-lg-4"><input type="text" name="department[]" class="form-control" id="text"  placeholder="@lang('home.department')"></div><div class="col-2  m-10"><button class="remove_field btn btn-danger">-</button></div>'); 
  });
    //start email generator
   var wrap_address = $(".wrap_address>#space_address");
   var add_new_address = $(".add_new_address");
   $(add_new_address).click(function (e) {
    e.preventDefault();
    $(wrap_address).append('<div class="form-group" ><label class="control-label col-lg-2">@lang('home.address') </label><div class="col-lg-9"><input type="text" name="address[]" class="form-control" id="text" placeholder="@lang('home.address')"></div><div class="col-2  m-10"><button class="remove_field btn btn-danger">-</button></div></div>'); 
  });
   //start phones generator
   var wrap_phones = $(".wrap_phones>#space_phones");
   var add_new_phone = $(".add_new_phone");
   $(add_new_phone).click(function (e) {
    e.preventDefault();
    $(wrap_phones).append('<div class="form-group" ><label class="control-label col-lg-2">@lang('home.phone') </label><div class="col-lg-9"><input type="text" name="phone[]" class="form-control" id="phone" placeholder="@lang('home.phone')"></div><div class="col-2  m-10"><button class="remove_field btn btn-danger">-</button></div></div>'); 
  });

   //start whatsapp generator
   var wrap_whatsapp = $(".wrap_whatsapp>#space_whatsapp");
   var add_new_whatsapp = $(".add_new_whatsapp");
   $(add_new_whatsapp).click(function (e) {
    e.preventDefault();
    $(wrap_whatsapp).append('<div class="form-group" ><label class="control-label col-lg-2">@lang('home.whatsapp') </label><div class="col-lg-9"><input type="text" name="whatsapp[]" class="form-control" id="whatsapp" placeholder="@lang('home.whatsapp')"></div><div class="col-2  m-10"><button class="remove_field btn btn-danger">-</button></div></div>'); 
  });
   //start  social media generator
   var wrap_social_media = $(".wrap_social_media>#space_social_media");
   var add_new_social_media = $(".add_new_social_media");
   $(add_new_social_media).click(function (e) {
    e.preventDefault();
    $(wrap_social_media).append('<div class="form-group" ><div class="col-lg-2"> <button class="remove_field btn btn-danger">-</button></div><div class="col-lg-2"><input type="text" name="name_ar[]" multiple class="form-control" id="text" placeholder="@lang('home.name_ar')"></div><div class="col-lg-2"><input type="text" name="name_en[]" multiple class="form-control" id="text" multiple placeholder="@lang('home.name_en')"></div><div class="col-lg-2"> <input type="text" name="url[]" multiple class="form-control" id="url"  placeholder="@lang('home.url')"></div><div class="col-2"><input type="file" name="social_logo[]" class="file-styled"  multiple></div></div>'); 
  });

   $(document).on("click",".remove_field",function(){
    $(this).parent().parent().remove();
  });
    </script>
@stop
