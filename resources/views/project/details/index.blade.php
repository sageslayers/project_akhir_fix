<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php

$dateOfBirth = auth()->user()->users_details->users_details_birth ;
$years = \Carbon\Carbon::parse($dateOfBirth)->age;
$detail = auth()->user()->users_details;
$month = date('m');
$day = date('d');
$year = date('Y');
$hour = date('h');
$minute = date('i');
// dd($project);
$today = $year . '-' . $month . '-' . $day;

?>

<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="ni ni-circle-08" ></i>
                        <span class="nav-link-text" >{{ __('Manage Profile') }}</span>

                    </a>

                    <div class="collapse" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('User profile') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.index') }}">
                                    {{ __('User Management') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="{{ route('project.index') }}">
                        <i class="ni ni-atom" ></i>
                        <span class="nav-link-text" >{{ __('Manage Project') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('icons') }}">
                        <i class="fa fa-users"></i> {{ __('Manage Group') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('map') }}">
                        <i class="ni ni-pin-3 text-orange"></i> {{ __('Maps') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('table') }}">
                      <i class="ni ni-bullet-list-67 text-default"></i>
                      <span class="nav-link-text">Tables</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="ni ni-circle-08 text-pink"></i> {{ __('Register') }}
                    </a>
                </li>

            </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->

        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="../../assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">

                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../../argon/img/brand/{{auth()->user()->avatar}}">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{auth()->user()->name}}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{route('project.index')}}">Project</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$project->id}}</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <!-- Button trigger modal -->
              @if($project->project_has_question)
              <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target=".bd-example-modal-lg">
              <i class="ni ni-fat-add"></i> New Phase
              </button>
              @else
              <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target=".bd-example2-modal-lg">
                <i class="ni ni-fat-add"></i> Set up Question
                </button>
              @endif
              <!-- Modal -->



              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Topik :  {{$project->project_topic}}</h3>


           <!-- Modal -->
            <!-- Button trigger modal -->
            @if (session('status'))

            <!-- Modal -->
            <div class="modal fade" id="modelId2" tabindex="-1" role="alert" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="alert">
                    <div class="modal-content">
                        <div class="modal-body">

                                 <h4 class="alert-heading"></h4>
                                 <p>{{session('status')}}</p>
                                 <p class="mb-0"></p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        @endif




            </div>
            <!-- Light table -->

            <div class="modal hide fade bd-example-modal-lg" id="modelId" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                              <div class="modal-header">
                                      <h5 class="modal-title">Add New Project</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                  </div>
                          <div class="modal-body">
                              <div class="container-fluid">
                              <form method="post" action="{{ route('project.store') }}" autocomplete="off">
                            @csrf

                            @method('post')

                            <h6 class="heading-small text-muted mb-4">{{ __('Project Details') }}</h6>




                            <div class="form-group{{ $errors->has('project_topic') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('project_topic') ? ' is-invalid' : '' }}" placeholder="{{ __('Topic') }}" type="text" name="project_topic" required autofocus>
                                </div>
                                @if ($errors->has('project_topic'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('project_topic') }}</strong>
                                    </span>
                                @endif

                                </div>

                                <div class="form-group{{ $errors->has('project_subtopic') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('project_subtopic') ? ' is-invalid' : '' }}" placeholder="{{ __('sub topic') }}" type="text" name="project_subtopic" required autofocus>
                                </div>
                                @if ($errors->has('project_subtopic'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('project_subtopic') }}</strong>
                                    </span>
                                @endif

                                </div>

                                <div class="form-group{{ $errors->has('project_kd') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    <textarea class="form-control{{ $errors->has('project_kd') ? ' is-invalid' : '' }}" placeholder="{{ __('Kompetensi Dasar') }}" type="text" name="project_kd" required autofocus ></textarea>
                                </div>
                                @if ($errors->has('project_kd'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('project_kd') }}</strong>
                                    </span>
                                @endif

                                </div>

                                <div class="form-group{{ $errors->has('project_indicator') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    <textarea class="form-control{{ $errors->has('project_indicator') ? ' is-invalid' : '' }}" placeholder="{{ __('Indicator') }}" type="text" name="project_indicator" required autofocus ></textarea>
                                </div>


                                </div>

                                <div class="form-group{{ $errors->has('project_max_member') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('project_indicator') ? ' is-invalid' : '' }}" placeholder="{{ __('Max Member / Group') }}" type="number" name="project_max_member" required autofocus ></input>
                                </div>
                                @if ($errors->has('project_max_member'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('project_max_member') }}</strong>
                                    </span>
                                @endif
                                <input type="hidden" name="identity_number" value={{auth()->user()->identity_number}} />

                                </div>
                                <div class="form-group{{ $errors->has('project_phase') ? ' has-danger' : '' }} mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"></span>
                                        </div>
                                        <input class="form-control{{ $errors->has('project_phase') ? ' is-invalid' : '' }}" placeholder="{{ __('Project phase') }}" type="number" name="project_phase" required autofocus />
                                    </div>
                                </div>



                                <div class="modal-footer">

                              <input type="submit" value="Create" class="btn btn-primary" />
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>


                        </form>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>



              <div class="modal hide fade bd-example2-modal-lg" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title">Add Basic Question</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                            <form method="post" action="{{ route('project.details.store', $project) }}" autocomplete="off">
                          @csrf
                          @method('post')
                          <h6 class="heading-small text mb-4">Topic : {{ $project->project_topic  }}</h6>



                              <div class="form-group{{ $errors->has('project_details_desc') ? ' has-danger' : '' }} mb-3">
                              <div class="input-group input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"></span>
                                  </div>
                                  <textarea rows="20" cols="50" class="form-control{{ $errors->has('project_details_desc') ? ' is-invalid' : '' }}" placeholder="{{ __('Basic Question') }}" type="text" name="project_details_description" required autofocus ></textarea>
                              </div>
                              @if ($errors->has('project_details_desc'))
                                  <span class="invalid-feedback" style="display: block;" role="alert">
                                      <strong>{{ $errors->first('project_details_desc') }}</strong>
                                  </span>
                              @endif

                              </div>

                              <div class="form-row">
                                <div class="col">
                                    Start Time

                                  <input type="datetime-local" class="form-control" name="project_details_start_time" value="{{$today}}" >
                                </div>
                                <div class="col">
                                    End Time
                                  <input type="datetime-local" class="form-control" name="project_details_end_time">
                                </div>
                              </div>

                              <input type="hidden" name="identity_number" value={{auth()->user()->identity_number}} />
                              <input type="hidden" name="project_details_type" value="Basic Question"/>






                              <div class="modal-footer">

                            <input type="submit" value="Create" class="btn btn-primary" />
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>


                      </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Activity</th>
                    <th scope="col" class="sort" data-sort="budget">Completion</th>
                    <th scope="col" class="sort" data-sort="status">Start Time</th>
                    <th scope="col" class="sort" data-sort="status">End Time</th>
                    {{-- <th scope="col">Users</th>
                    <th scope="col" class="sort" data-sort="completion">Completion</th> --}}
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">

                @php
                $no = 0 ;
                @endphp
                  @foreach ($project->project_details as $p)


                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                            @if($p->project_details_type == "Phase")
                          <span class="name mb-0 text-sm">{{$p->project_details_type}} {{++$no}}</span>
                          @else
                          <span class="name mb-0 text-sm">{{$p->project_details_type}}</span>
                          @endif
                        </div>
                      </div>
                    </th>
                    <th scope="row">
                        <div class="media align-items-center">
                          <div class="media-body">
                            <span class="name mb-0 text-sm">Kosong</span>
                          </div>
                        </div>
                      </th>
                    <td>
                      <span class="badge badge-dot mr-4">
                        {{$p->project_details_start_time}}
                      </span>
                    </td>
                    <td>
                        <span class="badge badge-dot mr-4">
                          {{$p->project_details_end_time}}
                        </span>
                      </td>
                    {{-- <td>
                      <div class="avatar-group">
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                          <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
                        </a>
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
                          <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
                        </a>
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
                          <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
                        </a>
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
                          <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
                        </a>

                      </div>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="completion mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td> --}}
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <form id = "form1" action="{{ route('project.destroy', $project) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <a class ="dropdown-item" href="#" onclick="confirm('Are you sure you want to delete this project?')? document.getElementById('form1').submit(): '#' ;">Delete</a>
                                 </form>
                          <a class="dropdown-item" href="{{route('project.details.index', $project)}}">Setting</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Dark table -->

      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
        <div class="copyright text-center text-xl-left text-muted">
            &copy; {{ now()->year }} <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a> &amp;
            <a href="https://www.updivision.com" class="font-weight-bold ml-1" target="_blank">Updivision</a>
        </div>
          </div>
    <div class="col-xl-6">
        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
                <a href="https://www.updivision.com" class="nav-link" target="_blank">Updivision</a>
            </li>
            <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
        </ul>
    </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.js?v=1.2.0"></script>
  <script src="../../assets/js/modal.js"></script>
</body>

</html>
