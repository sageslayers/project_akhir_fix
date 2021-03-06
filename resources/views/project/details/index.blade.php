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

if($pd_time == null ) {
   $pd_time  = date('Y-m-d\Th:i');
}
else {

    $pd_time = date('Y-m-d\Th:i',strtotime($pd_time));
}
$today = $pd_time;
$later = strtotime("+7 day",strtotime($today));
$later = date('Y-m-d\Th:i',$later);
?>

<!DOCTYPE html>
<html>


<head>

    @include('project.header')
</head>

<body>
  <!-- Sidenav -->
 @include('project.sidebar')
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

          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    @if(session('tmp_img'))

                    <img alt="Image placeholder" src="{{ session('tmp_img') }}">
                    @else
                    <img alt="Image placeholder" src="{{ auth()->user()->avatar }}">
                        @endif
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
                <a href="{{route('profile.edit')}}" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>

                <div class="dropdown-divider"></div>
            <form id = "logout-form"action="{{route('logout')}}" method="post">
                    @method('POST')
                    @csrf
                    <button onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                      </a>
                </form>

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
              @if (!$project->hasQuiz)
              <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target=".bd-assignment-modal-lg">
                <i class="ni ni-fat-add"></i> Give Individual Assignment
                </button>
              @else
            <a href="{{route('nilai.export',$project)}}" type="button" class="btn btn-sm btn-neutral" >
                <i class="ni ni-fat-add"></i> View Individual Assignment
            </a>
            @endif
              @if ($project->project_status == "pending")
              <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target=".bd-example2-modal-lg">
                <i class="ni ni-fat-add"></i> Set up Question
                </button>

              @elseif(count($project->project_details) != $project->project_phase+1 )
              <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target=".bd-example4-modal-lg">
                <i class="ni ni-fat-add"></i> New Phase
                </button>

              @endif


              <!-- Modal -->
                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal hide fade bd-assignment-modal-lg"  id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Individual Quiz</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <form action = "{{route('project.quiz.store',$project)}}" method = "post" >
                                    @CSRF
                                    @method("POST")
                                <div class="field_wrapper">

                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><strong>{{__('1.')}}</strong> </span>

                                        </div>

                                        <input class="form-control" placeholder="{{ __('Question') }}" value="" type="text" name="pertanyaan[]" required autofocus>
                                    </div>
                                    <div class="attachmentDiv">

                                    </div>
                            <div class ="form-row">
                                <div class="col">
                                    <input type="text" class ="form-control" name="jawaban[]" placeholder="Answer" value=""/>
                                </div>
                                <div class="col">
                                    <input type="text" class ="form-control" name="pengecoh1[]" placeholder="Distractor" value=""/>
                                </div>
                                <div class="col">
                                    <input type="text" class ="form-control" name="pengecoh2[]" placeholder="Distractor" value=""/>
                                </div>
                                <div class="col">
                                    <input type="text" class ="form-control" name="pengecoh3[]" placeholder="Distractor" value=""/>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="add_button" title="Add field"><img src="../../assets/img/icons/add.png" width="25"/></a>

                                </div>
                                <br>
                                @if($project->hasTime)
                                <div class="form-row">
                                    <div class="col">
                                        Start Time
                                      <input type="datetime-local" class="form-control" name="start_time" value="{{$today}}" >
                                    </div>
                                    <div class="col">
                                        End Time
                                    <input type="datetime-local" class="form-control" name="end_time" value= "{{$later}}">
                                    </div>
                                  </div>
                                  @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               <input type="submit" class="btn btn-primary" value="Save" >
                            </form>
                            </div>
                        </div>
                    </div>
                </div>


              <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target=".bd-example3-modal-lg">
                <i class="ni ni-align-center"></i> View Project Details
                </button>
                @if($project->project_status != 'completed')
                <br><br>
                <form method="post" onsubmit="return confirm('Are you sure you want finish this project?');" action = "{{route('project.update',$project)}}" >
                    @csrf

                <button type="submit" class="btn btn-sm btn-success">
                    <i class="ni ni-check-bold"></i> Mark As Done
                    </button>
                </form>
                    @endif

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
              <h3 class="mb-0">Topic :  {{$project->project_topic}}</h3>


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

            <div class="modal hide fade bd-example3-modal-lg" id="modelId" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                              <div class="modal-header">
                                      <h5 class="modal-title"></h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                  </div>
                          <div class="modal-body">
                              <div class="container-fluid">
                              <form method="post" action="{{ route('project.update',$project) }}" autocomplete="off">
                            @csrf

                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Project Details') }}</h6>




                            <div class="form-group{{ $errors->has('project_topic') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><strong>{{__('Topic : ')}}</strong> </span>

                                    </div>

                                    <input class="form-control{{ $errors->has('project_topic') ? ' is-invalid' : '' }}" placeholder="{{ __('Topic') }}" value="{{$project->project_topic}}" type="text" name="project_topic" required autofocus>
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
                                        <span class="input-group-text"><strong>{{__('Sub Topic : ')}}</strong> </span>
                                    </div>
                                    <input class="form-control{{ $errors->has('project_subtopic') ? ' is-invalid' : '' }}" placeholder="{{ __('sub topic') }}" type="text" name="project_subtopic" value="{{$project->project_subtopic}}" required autofocus>
                                </div>
                                @if ($errors->has('project_subtopic'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('project_subtopic') }}</strong>
                                    </span>
                                @endif

                                </div>
                                {{__('Basic Competencies ')}}
                                <div class="form-group{{ $errors->has('project_kd') ? ' has-danger' : '' }} mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">

                                        </div>
                                        <textarea rows="12" class="form-control{{ $errors->has('project_kd') ? ' is-invalid' : '' }}" placeholder="{{ __('basic competencies ') }}" type="text" name="project_kd"  required autofocus>{{$project->project_kd}}</textarea>
                                    </div>
                                    @if ($errors->has('project_kd'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('project_kd') }}</strong>
                                        </span>
                                    @endif

                                    </div>

                                    {{__('Indicator ')}}
                                <div class="form-group{{ $errors->has('project_indicator') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">

                                    </div>
                                    <textarea rows="12" class="form-control{{ $errors->has('project_indicator') ? ' is-invalid' : '' }}" placeholder="{{ __('Indicator') }}" type="text" name="project_indicator" required autofocus >{{$project->project_indicator}}</textarea>
                                </div>


                                </div>

                                <div class="form-group{{ $errors->has('project_max_member') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><strong> {{__('Group :  ')}}</strong></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('project_indicator') ? ' is-invalid' : '' }}"   type="number" readonly value="{{$project->project_group}}" name="project_max_member" required autofocus >
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
                                            <span class="input-group-text"><strong> {{__('Phase :  ')}}</strong></span>
                                        </div>
                                    <input class="form-control{{ $errors->has('project_phase') ? ' is-invalid' : '' }}" placeholder="{{ __('Project phase') }}" readonly value="{{max($project->project_phase-1,0)}}" type="number" name="project_phase" required autofocus />
                                    </div>
                                </div>



                                <div class="modal-footer">

                              <input type="submit" value="Update" class="btn btn-primary" />
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
                            <form method="post" action="{{ route('project.details.store', $project) }}" enctype="multipart/form-data" autocomplete="off">
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
                              Attachment
                              <input type="file" class="form-control" required name="project_details_link" >
                              @if($project->hasTime)
                              <div class="form-row">
                                <div class="col">
                                    Start Time

                                  <input type="datetime-local" class="form-control" name="project_details_start_time" value="{{$today}}" >
                                </div>
                                <div class="col">
                                    End Time
                                <input type="datetime-local" class="form-control" name="project_details_end_time" value= "{{$later}}">
                                </div>
                              </div>
                              @endif
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

            <div class="modal hide fade bd-example4-modal-lg" id="modelId4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title">Add New Phase</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                            <form method="post" action="{{ route('project.details.store', $project) }}" enctype="multipart/form-data" autocomplete="off" >
                          @csrf
                          @method('post')
                            <h6 class="heading-small text mb-4">Phase {{count($project->project_details)}}</h6>



                              <div class="form-group{{ $errors->has('project_details_desc') ? ' has-danger' : '' }} mb-3">
                              <div class="input-group input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"></span>
                                  </div>
                                  <textarea rows="20" cols="50" class="form-control{{ $errors->has('project_details_desc') ? ' is-invalid' : '' }}" placeholder="{{ __('Phase Description') }}" type="text" name="project_details_description" required autofocus ></textarea>
                              </div>
                              @if ($errors->has('project_details_desc'))
                                  <span class="invalid-feedback" style="display: block;" role="alert">
                                      <strong>{{ $errors->first('project_details_desc') }}</strong>
                                  </span>
                              @endif

                              </div>
                              Attachment
                              <input type="file" class="form-control" required name="project_details_link" >
                              @if($project->hasTime)
                              <div class="form-row">
                                <div class="col">

                                    Start Time

                                  <input type="datetime-local" class="form-control" name="project_details_start_time" value="{{$today}}" >
                                </div>
                                <div class="col">
                                    End Time
                                    <input type="datetime-local" class="form-control" name="project_details_end_time" value= "{{$later}}">
                                </div>
                              </div>
                              @endif
                              <input type="hidden" name="identity_number" value={{auth()->user()->identity_number}} />
                              <input type="hidden" name="project_details_type" value="Phase {{count($project->project_details)}}"/>






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
                    <th scope="col" class="sort" data-sort="budget">Group Progress</th>
                    <th scope="col" class="sort" data-sort="budget">Attachment</th>
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
                            <span class="name mb-0 text-sm">
                                @for ($i = 1; $i <= $project->project_group; $i++)
                                    <!-- Button trigger modal -->
                                    @php

                                    $kel_id = $project->kelompok->where('project_id',$project->id)
                                    ->where('kelompok_nomor',$i)->pluck('id')->first();

                                    $nilai = $nilai_kelompok
                                                ->where('kelompok_id',$kel_id)
                                                ->where('project__details_id',$p->id)
                                                ->pluck('nilai')->first();
                                    // dd($nilai);
                                    // echo ($nilai);
                                    @endphp
                                    @if($nilai == 0 )
                                    <a href="#" style="color: red;" data-toggle="modal" data-target="#modelIdGroup{{$p->id}}{{$i}}">{{$i}}</a>
                                    @else
                                    <a href="#" style="color: green;" data-toggle="modal" data-target="#modelIdGroup{{$p->id}}{{$i}}">{{$i}}</a>
                                    @endif
                                    <!-- Modal -->

                                    <div class="modal fade" id="modelIdGroup{{$p->id}}{{$i}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{$p->project_details_type}} : Kelompok {{$i}} </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>

                                                <div class="modal-body" >
                                                    <blockquote class="blockquote">
                                                        <p class="mb-0"></p>
                                                        <footer class="blockquote-footer"> <cite title="Source Title">Anggota</cite></footer>
                                                    </blockquote>
                                                    @foreach ($project->kelompok->where('kelompok_nomor', $i) as $kel)
                                                        @foreach ($kel->kelompok_detail as $k)
                                                        @php
                                                            $x = $user->where('identity_number',$k->identity_number);
                                                        @endphp
                                                          @foreach($x as $xx)
                                                          {{$xx['name']}}<br>
                                                          @endforeach
                                                        @endforeach




                                                    @endforeach
                                                   <hr>


                                                   <small class="text-muted">

                                                  {{auth()->user()->name}}({{$p->project_details_start_time}}) : {{$p->project_details_description}}

                                                  </small><br>

                                                    @php
                                                    $kelompok_id = $project->kelompok->where('kelompok_nomor',$i)->pluck('id')->first();
                                                    @endphp
                                                   @foreach($komentar->where('project__details_id',$p->id)->where('kelompok_id',$kelompok_id) as $k)

                                                     <small class="text-muted">
                                                    {{$k['name']}}({{$k->created_at}}) : {{$k->komentar_desc}}
                                                    @if($k->link != '#')
                                                    <br><a href="localhost:8000{{$k->link}}" target="__blank">Attachment</a>
                                                    @endif
                                                    </small><br>

                                                   @endforeach

                                                   <form action="{{route('project.komentar.store',$project)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('POST')

                                                    <br>
                                                    @php

                                                    @endphp
                                                    <input type="hidden" name="project__details_id" value={{$p->id}} >
                                                    <input type="hidden" name="kelompok_id" value={{$kelompok_id}} >
                                                    <input type="hidden" name="identity_number" value={{auth()->user()->identity_number}} >
                                                    <textarea required class="form-control" name="komentar_desc" ></textarea>
                                                    <div class="attachmentDiv">
                                                        <input type="file" name="attachment">
                                                        <div class="myDiv">
                                                            <input type="submit"  class="btn btn-dark btn-sm" value="Reply">
                                                            </div>
                                                    </div>

                                                    </form>
                                                </div>

                                                <div class="modal-footer">
                                                <form action="{{route('project.nilai.update',['id_project_details' => $p->id , 'id_kelompok' => $kelompok_id])}}" method="post">
                                                    @method('POST')
                                                    @CSRF
                                                     Score
                                                    <input type="number" class="" name="nilai" value={{$nilai}} >
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <input type="submit"  class="btn btn-primary" value="Set Nilai">
                                                </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </span>
                          </div>
                        </div>
                      </th>
                      <td>
                        <span class="badge badge-dot mr-4">
                            <form method="get" target="_blank" action="http://localhost:8000{{$p->project_details_link}}">
                                <button class="btn btn-primary" type="submit">Download</button>
                             </form>
                          </span>
                      </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                          @if($project->hasTime)
                        {{$p->project_details_start_time}}
                        @else
                        -
                        @endif
                      </span>
                    </td>
                    <td>
                        @if($project->hasTime)
                        <span class="badge badge-dot mr-4">
                          {{$p->project_details_end_time}}
                          @else
                          -
                          @endif
                        </span>
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item"
                                    href="#" data-toggle="modal" data-target="#modelId{{$p->id}}" >Edit Activity</a>
                                <!-- Modal -->

                            </div>
                        </div>
                    </td>
                    <div class="modal fade" id="modelId{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title">Edit {{$p->project_details_type}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <form enctype="multipart/form-data" method="post" action="{{ route('project.details.update',['project' => $project , 'detail' => $p->id]) }}" autocomplete="off">
                                      @csrf

                                      @method('put')

                                      <h6 class="heading-small text-muted mb-4">{{ __('Project Details') }}</h6>




                                          {{__('Description ')}}
                                          <div class="form-group{{ $errors->has('project_details_description') ? ' has-danger' : '' }} mb-3">
                                              <div class="input-group input-group-alternative">
                                                  <div class="input-group-prepend">

                                                  </div>
                                                  <textarea rows="12" class="form-control{{ $errors->has('project_details_description') ? ' is-invalid' : '' }}" placeholder="{{ __('Description.. ') }}" type="text" name="project_details_description"  required autofocus>{{$p->project_details_description}}</textarea>
                                              </div>
                                              @if ($errors->has('project_details_description'))
                                                  <span class="invalid-feedback" style="display: block;" role="alert">
                                                      <strong>{{ $errors->first('project_details_description') }}</strong>
                                                  </span>
                                              @endif

                                              </div>
                                              <div class="form-group{{ $errors->has('project_details_description') ? ' has-danger' : '' }} mb-3">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                    Attachment  <input type="file" name="project_details_link" value={{$p->project_details_link}}
                                                    <br>
                                                </div>

                                            </div>


                                            @if($project->hasTime)
                                              <div class="form-row">
                                                <div class="col">
                                                    Start Time
                                                  <input type="datetime-local" name="project_details_start_time" class="form-control" value={{date('Y-m-d\Th:i',strtotime($p->project_details_start_time))}}>
                                                </div>
                                                <div class="col">
                                                    End Time
                                                  <input type="datetime-local" name="project_details_end_time" class="form-control" value={{date('Y-m-d\Th:i',strtotime($p->project_details_end_time))}}>
                                                </div>
                                              </div>
                                              @endif

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
