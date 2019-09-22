@extends('dashboard.layouts.main')
@section('content')
        <!-- Main content -->
        <div class="content-wrapper">
                        <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">@lang('home.categories')</span> - @lang('home.dashboard')</h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                         </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('ar/admin/home') }}"><i class="icon-home2 position-left"></i> @lang('home.home')</a></li>
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
                            <h5 class="panel-title">@lang('home.create_users')</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form class="form-horizontal form-validate-jquery" method="post" action="{{ route('categories.update',$info) }}" enctype='multipart/form-data'  >
                            <input name="_method" type="hidden" value="PUT">
                            <input name="use" type="hidden" value="{{@$info->id}}">

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
                                <legend class="text-bold">@lang('home.add_new_category')</legend>
                                    <!-- choose type category input -->
                                    <div class="form-group">
                                    <label class="control-label col-lg-3">@lang('home.choose_type_category') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9"> 
                                        <select name="category_type" class="form-control" id="chose_type" >
                                            <option value="main" @if(@$info->parent_id == NULL) selected @endif>@lang('home.main_category')</option>
                                            <option value="sub" @if(@$info->parent_id != NULL) selected @endif>@lang('home.sub_category')</option>
                                               
                                        </select>
                                        </div>
                                    </div>
                                    <!-- /choose type category input -->  
                                     <!-- choose category input -->
                                     <div class="form-group" id="main_category">
                                    <label class="control-label col-lg-3">@lang('home.main_categories') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9"> 
                                        <select name="parent_id" class="form-control" >
                                            <option value="">@lang('home.select_one')</option>
                                            @foreach($categories as $category)
                                            <option value="{{@$category->id}}" @if(@$info->parent_id == $category->id) selected @endif>{{(App::isLocale('en')  ? @$category->name_en : @$category->name_ar)}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <!-- /choose category input -->  

                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.name_ar') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="name_ar" class="form-control" placeholder="@lang('home.name_ar')" value="{{@$info->name_ar}}">
                                        </div>
                                    </div>
                                    <!-- /title ar input -->

                                    <!-- title ar input -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.name_en') <span class="text-danger" title="@lang('home.required')">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" name="name_en" class="form-control"  placeholder="@lang('home.name_en')" value="{{@$info->name_en}}">
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
                                    <!-- Logo uploader -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">@lang('home.icon') <span class="text-danger" title="@lang('home.required')"> *</span></label>
                                        <div class="col-lg-9">
                                            <input type="file" name="icon" class="file-styled" >
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
                    <img src="{{url('/').'/'.@$info->icon}}" class="img-responsive" style="max-width:100%" >
                    </div>
                  
            </div>
             <!-- Content area -->

        </div>
        <!-- Main content -->
@stop
