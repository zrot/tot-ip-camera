@extends('layouts.plane')

@section('body')
  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url ('') }}">TOT | IP Camera | Monitoring </a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li>
                      <a href="#"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} </a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" >
                           <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li {{ (Request::is('/') ? 'class=active' : '') }}>
                        <a href="{{ url ('/') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li {{ (Request::is('*monitor') ? 'class=active' : '') }}>
                        <a href="{{ url ('monitor') }}"><i class="fa fa-video-camera fa-fw"></i> Monitor</a>
                    </li>
                    <li {{ (Request::is('*camera') ? 'class=active' : '') }}>
                        <a href="{{ url ('camera') }}"><i class="fa fa-camera fa-fw"></i> Camera</a>
                    </li>
                    <li {{ (Request::is('*grouplist') ? 'class=active' : '') }}>
                        <a href="{{ url ('grouplist') }}"><i class="fa fa-share-alt fa-fw"></i> Group List</a>
                    </li>
                    <li {{ (Request::is('*sharedaccess') ? 'class=active' : '') }}>
                        <a href="{{ url ('sharedaccess') }}"><i class="fa fa-lock fa-fw"></i> Permission Access</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Admin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li {{ (Request::is('*category') ? 'class=active' : '') }}>
                                <a href="{{ url ('category') }}"><i class="fa fa-tags fa-fw"></i> Category</a>
                            </li>
                            <li {{ (Request::is('*user') ? 'class=active' : '') }}>
                                <a href="{{ url ('user') }}"><i class="fa fa-users fa-fw"></i> User</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">@yield('page_heading')</h1>
        </div><!-- /.col-lg-12 -->
      </div>
      <div class="row">
        @yield('section')
      </div>
        <!-- /#page-wrapper -->
    </div>
  </div>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form>
@stop
