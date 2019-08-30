@extends('dashboard.layouts.main')
@section('content')
	
        <!-- Main content -->
        <div class="content-wrapper">
        	            <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                    <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">@lang('home.home')</span> - @lang('home.full_report')</h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="{{URL::to('ar/admin/home')}}"><i class="icon-home2 position-left"></i> @lang('home.home')</a></li>
                        <li class="active">@lang('home.full_report')</li>
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
                                           <!-- table reports -->
                   <div class="table-responsive">
                                <table class="table text-nowrap  datatable-basic"  id="table">
                                    <thead>
                                        <tr>
                                        <th>@lang('home.user')</th>                                        
                                        <th class="col-md-2">@lang('home.action')</th>
                                        <th class="col-md-2">@lang('home.since')</th>
                                        <th class="col-md-2">@lang('home.ip')</th>
                                        <th class="col-md-2">@lang('home.location')</th>
                                        <th class="col-md-2">@lang('home.browser')</th>
                                        <th class="col-md-2">@lang('home.user_full_reports')</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reports as $user)
                                    <tr>
                                    <td>
                                        <div class="media-left">
                                            <div class=""><a href="#" class="text-default text-semibold">{{ @$user->fname.' '.$user->lname }}</a></div>
                                            @if($user->last_report()->key == 'dashboard_user_login')
                                                <div class="text-muted text-size-small" title="online">
                                                    <span class="status-mark border-blue position-left"></span>
                                                </div>
                                            @elseif($user->last_report()->key == 'dashboard_user_logout')
                                                <div class="text-muted text-size-small" title="ofline">
                                                    <span class="status-mark border-grey-400 position-left"></span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="media-left media-middle">
                                            <a href="#"><img src="{{ asset('/') }}{{ @$user->image }}" class="img-circle img-xs" alt=""></a>
                                        </div>
                                       </td>
                                       <td><span class="label bg-blue">{{ @$user->last_report()->text }}</span></td>
                                       <td><span class="text-muted">{{@Carbon\Carbon::parse($user->last_report()->created_at)->diffForHumans()}}</span></td>
                                       <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i>{{ @$user->last_report()->ip }}</span></td>
                                       <td><h6 class="text-semibold">{{ @$user->last_report()->location }}</h6></td>
                                       <td><h6 class="text-semibold">{{ @$user->last_report()->browser }}</h6></td>
                                       
                                       <td>
                                            <a href="{{URL::to('ar/admin/reports_browsing/').'/'.$user->id.'/u/'.@$user->fname}}" class="btn btn-primary"> <li class="icon-quill4"></li></a>
                                        </td>                                
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- table reports -->
                    </div>
                    </div>

            </div>
			 <!-- Content area -->

        </div>
        <!-- Main content -->
@stop