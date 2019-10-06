@extends('dashboard.layouts.main')
@section('content')

<!-- Main content -->
<div class="content-wrapper">
            <!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">@lang('home.home')</span> - @lang('home.categories_list')</h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
            </div>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="{{URL::to('ar/admin/home')}}"><i class="icon-home2 position-left"></i> @lang('home.home')</a></li>
            <li class="active">@lang('home.categories_list')</li>
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
                <li><a href="{{ URL::to('ar/admin/setting') }}"><i class="icon-gear"></i>@lang('home.general_settings')</a></li>
               
                <li><a href="{{ URL::to('ar/admin/categories_export') }}"><i class="icon-database-export"></i>@lang('home.export_exel_sheet')</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /page header -->

    <!-- Content area -->
<div class="content">
        <!-- Main charts -->
        <div class="row">
        <div class="panel panel-flat ">
        <!-- table lists -->
        <div class="table-responsive">
        @if(Session('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>@lang('home.success')!</strong> {{session('success')}}.
        </div>
        @endif
            <!--  -->
            <table class="table text-nowrap table datatable-basic" id="table">
                <thead>                  
                <tr>                                     
                    <th class="col-md-2">#</th>
                    <th class="col-md-2">@lang('home.name_ar')</th>
                    <th class="col-md-2">@lang('home.name_en')</th>
                    <th class="col-md-2">@lang('home.parent')</th>
                    <th class="col-md-2">@lang('home.icon')</th>
                    <th class="col-md-2">@lang('home.edit')</th>
                    <th class="col-md-2">@lang('home.delete')</th>
                    
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                    <td><span class="text-semibold">{{ @$category->id }}</span></td>
                    <td><span class="text-semibold">{{ @$category->name_ar }}</span></td>
                    <td><span class="text-muted">{{ @$category->name_en }}</span></td>
                    <td><span class="text-muted">
                        @if($category->parent_id != NULL)
                        {{ (App::isLocale('en')  ? @$category->category->name_en : @$category->category->name_ar) }}
                        @else 
                        @lang('home.non_parent')
                        @endif 
                    </span></td>
                    <td>
                        <img src="{{url('/'). @$category->icon }}" width="50" height="50" class="img-responsive" alt="{{ @$category->name_ar }}">
                    </td>
                    <td>
                        <a href="{{URL::to('ar/admin/categories/').'/'.$category->id.'/edit'}}" class="btn btn-warning "><li class="icon-pencil5"></li></a>
                    </td>
                    <td>@include('dashboard.categories.delete_from_list')</td> 
                </tr>
                @endforeach
                </tbody>
            </table>
            <!--  -->
        </div>
        <!-- table reports -->
    </div>
</div>

</div>
    <!-- Content area -->

</div>
<!-- Main content -->
@stop