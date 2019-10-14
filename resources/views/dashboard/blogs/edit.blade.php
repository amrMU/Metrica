@extends('dashboard.layouts.main')
@section('style')
    <script type="text/javascript" src="{{ asset('/') }}assets/js/pages/dashboard.js"></script>
@stop
@section('content')
        <!-- Main content -->
        <div class="content-wrapper">
                        <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-right6 position-left"></i>
                           <span class="text-semibold"> @lang('home.dashboard') - @lang('home.blogs') - @lang('home.edit_page_info')</span></h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                         </div>
                    </div>
                </div>
                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('ar/admin/home') }}"><i class="icon-home2 position-left"></i> @lang('home.home')</a></li>
                         <li><a href="{{ URL::to('ar/admin/blogs') }}"><i class="icon-blogger position-left"></i> @lang('home.blogs')</a></li>
                        <li class="active">@lang('home.update_info')</li>
                    </ul>

                    <ul class="breadcrumb-elements">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear position-left"></i>
                                @lang('home.settings')
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">

                              <li><a href="{{ URL::to('ar/admin/setting') }}"><i class="icon-gear"></i>@lang('home.settings')</a></li>
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
                            <h5 class="panel-title">@lang('home.update_info')</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form class="form-horizontal form-validate-jquery" method="post" action="{{ route('blogs.update',$info) }}" enctype='multipart/form-data'  >
                            <input name="_method" type="hidden" value="PUT">
                            <input name="use" type="hidden" value="{{@$info->id}}">
                                @if($errors->any())
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
                                <legend class="text-bold">@lang('home.edit_page_info')</legend>
                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.title_ar') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="title_ar" class="form-control" placeholder="@lang('home.title_ar')" value="{{@$info->title_ar}}">
                                        </div>
                                    </div>
                                    <!-- /title ar input -->

                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.title_en') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="title_en" class="form-control"  placeholder="@lang('home.title_en')" value="{{@$info->title_en}}">
                                        </div>
                                    </div>
                                    <!-- /title ar input -->
                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.url_page') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="url" class="form-control"  placeholder="@lang('home.url_page')" value="{{@$info->url}}">
                                        </div>
                                    </div>
                                    <!-- /title ar input -->
                                    <!-- Meta Tags input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.meta_tags') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="meta_tags" class="form-control tokenfield" value="@lang('home.placeholder_metatags')" value="{{@$info->meta_tags}}">
                                        </div>
                                    </div>
                                    <!-- /Meta Tags input -->
                                    {{-- content ar --}}
                                     <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.content_ar') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                             <textarea name="content_ar" id="editor1" rows="4" cols="4"  placeholder="@lang('home.content_ar')">{{ @$info->content_ar }}</textarea>
                                        </div>
                                    </div>

                                    {{-- content ar --}}
                                    {{-- content en --}}
                                     <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.content_en') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                             <textarea name="content_en" id="editor2" rows="4" cols="4"  placeholder="@lang('home.content_en')">{{ @$info->content_en }}</textarea>
                                        </div>
                                    </div>
                                    {{-- content en --}}

                                    {{-- Show page --}}
                                     <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.status')</label>
                                        <div class="col-lg-4">
                                            <div class="checkbox checkbox-switch">
                                                        <input type="radio" name="status" class="switch" value="show" @if($info->status  == 'show') checked="checked"  @endif>
                                                    <label>
                                                         @lang('home.show')
                                                    </label>
                                            </div>
                                        </div>
                                         <div class="col-lg-4">
                                            <div class="checkbox checkbox-switch">
                                                    <input type="radio" name="status" class="switch" value="hide" @if($info->status  == 'hide') checked="checked" @endif >
                                                    <label>
                                                        @lang('home.hide')
                                                    </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{--Show page --}}

                                    <!-- Logo uploader -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.image') <span class="text-danger" title="@lang('home.required')"> *</span></label>
                                        <div class="col-lg-9">
                                            <input type="file" name="image" class="file-styled" >
                                        </div>
                                    </div>
                                    <!-- /Logo uploader -->


                                </fieldset>
                                {{-- general Info --}}


                                <div class="text-right">
                                    <button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
                                    <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-left13 position-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form validation -->
                    <div class="col-md-2">
                    <img src="{{url('/').'/'.@$info->image}}" class="img-responsive" style="max-width:100%" >
                    </div>

            </div>
             <!-- Content area -->

        </div>
        <!-- Main content -->
@stop

@section('jsCode')
    <script type="text/javascript">
          // Full featured editor
        CKEDITOR.replace( 'editor1',{
            extraPlugins: 'forms'
        });
        CKEDITOR.replace( 'editor2',{
            extraPlugins: 'forms'
        });
    </script>
@stop
