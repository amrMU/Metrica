@extends('dashboard.layouts.main')
@section('content')

<!-- Main content -->
<div class="content-wrapper">
            <!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">@lang('home.home')</span> - @lang('home.wating_lists')</h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
            </div>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="{{URL::to('ar/admin/home')}}"><i class="icon-home2 position-left"></i> @lang('home.home')</a></li>
            <li class="active">@lang('home.wating_lists')</li>
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
                <li><a href="{{ URL::to('ar/admin/wating_lists/export') }}"><i class="icon-database-export"></i>@lang('home.export_exel_sheet')</a></li>
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
        @include('dashboard.wating_list.search_form')
        <div class="table-responsive">
        @if(Session('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>@lang('home.success')!</strong> {{session('success')}}.
        </div>
        @endif
            <table class="table text-nowrap" id="table">
                <thead>                  
                <tr>                                     
                    <th class="col-md-2">@lang('home.name')</th>
                    <th class="col-md-2">@lang('home.email')</th>
                    <th class="col-md-2">@lang('home.city')</th>
                    <th class="col-md-2">@lang('home.phone')</th>
                    <!-- <th class="col-md-2">@lang('home.status')</th> -->
                    <th class="col-md-2">@lang('home.type')</th>
                    <th class="col-md-2">@lang('home.delete')</th>
                    <!-- <th class="col-md-2">@lang('home.reply')</th> -->
                    
                </tr>
                </thead>
                <tbody>
                @foreach($lists as $list)
                <tr>
                
                    <td><span class="text-semibold">{{ @$list->name }}</span></td>
                    <td><span class="text-muted">{{ @$list->email }}</span></td>
                    <td><span class="text-semibold">{{$list->address_info->$name }}</td>
                    <td><h6 class="text-semibold">{{ @$list->phone }}</h6></td>
                    <!-- <td><h6 class="text-semibold">{{ @$list->status }}</h6></td> -->
                    <td><h6 class="text-semibold">{{ @$list->type }}</h6></td>
                    <td>
                    @include('dashboard.wating_list.delete_from_list')
                    <!-- <a href="{{URL::to('/admin/wating_lists/').'/'.$list->id.'/delete'}}" class="btn btn-danger "> <li class="icon-trash"></li></a> -->
                    </td> 
                    <td>
                    <!-- <a href="{{URL::to('/admin/reports_browsing/').'/'.$list->id}}" class="btn btn-primary"> <li class="icon-reply"></li></a> -->
                    </td>                                
                </tr>
                @endforeach
                </tbody>
            </table>
            <div style="padding:0 22%; margin-bottom: 24px;" class="center-block">
            {{@$lists->links()}}
            </div>

        </div>
        <!-- table reports -->
    </div>
</div>

</div>
    <!-- Content area -->

</div>
<!-- Main content -->
@stop