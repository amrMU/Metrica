@extends('dashboard.layouts.main')
@section('content')
    
        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">@lang('home.home')</span> - @lang('home.dashboard')</h4>
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                            <!-- <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                            <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                            <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a> -->
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="{{URL::to('ar/admin/home')}}"><i class="icon-home2 position-left"></i> @lang('home.home')</a></li>
                        <li class="active"> @lang('home.dashboard')</li>
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
                 {{-- 
                    <div class="col-lg-7">
                        <!-- Traffic sources -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Traffic sources</h6>
                                <div class="heading-elements">
                                    <form class="heading-form" action="#">
                                        <div class="form-group">
                                            <label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                                <input type="checkbox" class="switch" checked="checked">
                                                Live update:
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <ul class="list-inline text-center">
                                            <li>
                                                <a href="#" class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-plus3"></i></a>
                                            </li>
                                            <li class="text-left">
                                                <div class="text-semibold">New visitors</div>
                                                <div class="text-muted">2,349 avg</div>
                                            </li>
                                        </ul>

                                        <div class="col-lg-10 col-lg-offset-1">
                                            <div class="chart content-group" id="new-visitors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <ul class="list-inline text-center">
                                            <li>
                                                <a href="#" class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-watch2"></i></a>
                                            </li>
                                            <li class="text-left">
                                                <div class="text-semibold">New sessions</div>
                                                <div class="text-muted">08:20 avg</div>
                                            </li>
                                        </ul>

                                        <div class="col-lg-10 col-lg-offset-1">
                                            <div class="chart content-group" id="new-sessions"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <ul class="list-inline text-center">
                                            <li>
                                                <a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-people"></i></a>
                                            </li>
                                            <li class="text-left">
                                                <div class="text-semibold">Total online</div>
                                                <div class="text-muted"><span class="status-mark border-success position-left"></span> 5,378 avg</div>
                                            </li>
                                        </ul>

                                        <div class="col-lg-10 col-lg-offset-1">
                                            <div class="chart content-group" id="total-online"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="chart position-relative" id="traffic-sources"></div>
                        </div>
                        <!-- /traffic sources -->

                    </div>
                    --}}
                    {{--
                    <div class="col-lg-5">

                        <!-- Sales stats -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">Sales statistics</h6>
                                <div class="heading-elements">
                                    <form class="heading-form" action="#">
                                        <div class="form-group">
                                            <select class="change-date select-sm" id="select_date">
                                                <optgroup label="<i class='icon-watch pull-right'></i> Time period">
                                                    <option value="val1">June, 29 - July, 5</option>
                                                    <option value="val2">June, 22 - June 28</option>
                                                    <option value="val3" selected="selected">June, 15 - June, 21</option>
                                                    <option value="val4">June, 8 - June, 14</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="container-fluid">
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <div class="content-group">
                                            <h5 class="text-semibold no-margin"><i class="icon-calendar5 position-left text-slate"></i> 5,689</h5>
                                            <span class="text-muted text-size-small">orders weekly</span>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="content-group">
                                            <h5 class="text-semibold no-margin"><i class="icon-calendar52 position-left text-slate"></i> 32,568</h5>
                                            <span class="text-muted text-size-small">orders monthly</span>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="content-group">
                                            <h5 class="text-semibold no-margin"><i class="icon-cash3 position-left text-slate"></i> $23,464</h5>
                                            <span class="text-muted text-size-small">average revenue</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="chart content-group-sm" id="app_sales"></div>
                            <div class="chart" id="monthly-sales-stats"></div>
                        </div>
                        <!-- /sales stats -->

                    </div>  --}}
                </div>
                <!-- /main charts -->

                    <!-- Quick stats boxes -->
                    <div class="row">
                            <div class="col-lg-4">

                                <!-- Members online -->
                                <div class="panel bg-teal-400">
                                    <div class="panel-body">
                                        <div class="heading-elements">
                                            <span class="heading-text badge bg-teal-800">+53,6%</span>
                                        </div>

                                        <h3 class="no-margin">3,450</h3>
                                        Members online
                                        <div class="text-muted text-size-small">489 avg</div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="chart" id="members-online"></div>
                                    </div>
                                </div>
                                <!-- /members online -->

                            </div>

                            <div class="col-lg-4">

                                <!-- Current server load -->
                                <div class="panel bg-pink-400">
                                    <div class="panel-body">
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="#"><i class="icon-sync"></i> Update data</a></li>
                                                        <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
                                                        <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
                                                        <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <h3 class="no-margin">49.4%</h3>
                                        Current server load
                                        <div class="text-muted text-size-small">34.6% avg</div>
                                    </div>

                                    <div class="chart" id="server-load"></div>
                                </div>
                                <!-- /current server load -->

                            </div>

                            <div class="col-lg-4">

                                <!-- Today's revenue -->
                                <div class="panel bg-blue-400">
                                    <div class="panel-body">
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="reload"></a></li>
                                            </ul>
                                        </div>

                                        <h3 class="no-margin">$18,390</h3>
                                        Today's revenue
                                        <div class="text-muted text-size-small">$37,578 avg</div>
                                    </div>

                                    <div class="chart" id="today-revenue"></div>
                                </div>
                                <!-- /today's revenue -->

                            </div>
                        </div>
                        <!-- /quick stats boxes -->


                <!-- Dashboard content -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Marketing campaigns -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">@lang('home.browsing_info')</h6>
                                <div class="heading-elements">
                                    <span class="label bg-success heading-text">{{ $active_users->count() }} @lang('home.active')</span>
                                 
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <!-- <li><a href="#"><i class="icon-sync"></i> Update data</a></li> -->
                                                <!-- <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li> -->
                                                <li><a href="{{ URL::to('ar/admin/reports_browsing') }}"><i class="icon-copy"></i> @lang('home.full_report')</a></li>
                                                <!-- <li class="divider"></li> -->
                                                <!-- <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li> -->
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- table reports -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                    <tr>
                                    <th>@lang('home.user')</th>                                        
                                    <th class="col-md-2">@lang('home.action')</th>
                                    <th class="col-md-2">@lang('home.since')</th>
                                    <th class="col-md-2">@lang('home.ip')</th>
                                    <th class="col-md-2">@lang('home.location')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
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
                                                                                 
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- table reports -->

                        </div>
                        <!-- /marketing campaigns -->
                    </div>

                </div>
                <!-- /dashboard content -->


                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2019. <a href="#">Dashboard Web App Developed By </a>  <a href="https://www.linkedin.com/in/amrmuhamed" target="_blank">Amr Muhamed</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->
@stop