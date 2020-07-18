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

?>

<!DOCTYPE html>
<html>


<head>
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
                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                            aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </form>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                                data-target="#sidenav-main">
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
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ni ni-bell-55"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                                <!-- Dropdown header -->
                                <div class="px-3 py-3">
                                    <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong>
                                        notifications.</h6>
                                </div>
                                <!-- List group -->
                                <div class="list-group list-group-flush">
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg"
                                                    class="avatar rounded-circle">
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
                                                <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg"
                                                    class="avatar rounded-circle">
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
                                                <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg"
                                                    class="avatar rounded-circle">
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
                                                <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg"
                                                    class="avatar rounded-circle">
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
                                                <img alt="Image placeholder" src="../assets/img/theme/team-5.jpg"
                                                    class="avatar rounded-circle">
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
                                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View
                                    all</a>
                            </div>
                        </li>

                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
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
                                    <li class="breadcrumb-item"><a href="#">Project</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal"
                                data-target=".bd-example-modal-lg">
                                <i class="ni ni-fat-add"></i> New Project
                            </button>

                            <!-- Modal -->



                            <td></td>
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
                            <h3 class="mb-0">Manage Existing Project</h3>


                            <!-- Modal -->
                            <!-- Button trigger modal -->
                            @if (session('status'))

                            <!-- Modal -->
                            <div class="modal fade" id="modelId2" tabindex="-1" role="alert"
                                aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="alert">
                                    <div class="modal-content">
                                        <div class="modal-body">

                                            <h4 class="alert-heading"></h4>
                                            <p>{{session('status')}}</p>
                                            <p class="mb-0"></p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endif




                        </div>
                        <!-- Light table -->

                        <div class="modal hide fade bd-example-modal-lg" id="modelId" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                            <form method="post" action="{{ route('project.store') }}"
                                                autocomplete="off">
                                                @csrf

                                                @method('post')

                                                <h6 class="heading-small text-muted mb-4">{{ __('Project Details') }}
                                                </h6>




                                                <div
                                                    class="form-group{{ $errors->has('project_topic') ? ' has-danger' : '' }} mb-3">
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <input
                                                            class="form-control{{ $errors->has('project_topic') ? ' is-invalid' : '' }}"
                                                            placeholder="{{ __('Topic') }}" type="text"
                                                            name="project_topic" required autofocus>
                                                    </div>
                                                    @if ($errors->has('project_topic'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong>{{ $errors->first('project_topic') }}</strong>
                                                    </span>
                                                    @endif

                                                </div>

                                                <div
                                                    class="form-group{{ $errors->has('project_subtopic') ? ' has-danger' : '' }} mb-3">
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <input
                                                            class="form-control{{ $errors->has('project_subtopic') ? ' is-invalid' : '' }}"
                                                            placeholder="{{ __('Sub Topic') }}" type="text"
                                                            name="project_subtopic" required autofocus>
                                                    </div>
                                                    @if ($errors->has('project_subtopic'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong>{{ $errors->first('project_subtopic') }}</strong>
                                                    </span>
                                                    @endif

                                                </div>

                                                <div
                                                    class="form-group{{ $errors->has('project_kd') ? ' has-danger' : '' }} mb-3">
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <textarea
                                                            class="form-control{{ $errors->has('project_kd') ? ' is-invalid' : '' }}"
                                                            placeholder="{{ __('Basic Competencies') }}" type="text"
                                                            name="project_kd" required autofocus></textarea>
                                                    </div>
                                                    @if ($errors->has('project_kd'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong>{{ $errors->first('project_kd') }}</strong>
                                                    </span>
                                                    @endif

                                                </div>

                                                <div
                                                    class="form-group{{ $errors->has('project_indicator') ? ' has-danger' : '' }} mb-3">
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <textarea
                                                            class="form-control{{ $errors->has('project_indicator') ? ' is-invalid' : '' }}"
                                                            placeholder="{{ __('Indicator') }}" type="text"
                                                            name="project_indicator" required autofocus></textarea>
                                                    </div>


                                                </div>

                                                <div
                                                    class="form-group{{ $errors->has('project_group') ? ' has-danger' : '' }} mb-3">
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">

                                                        </div>
                                                        <input
                                                            class="form-control{{ $errors->has('project_group') ? ' is-invalid' : '' }}"
                                                            placeholder="{{ __('Total Group') }}" min="1" type="number"
                                                            name="project_group" required autofocus><br>

                                                    </div>
                                                    @if ($errors->has('project_group'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong>{{ $errors->first('project_group') }}</strong>
                                                    </span>
                                                    @endif
                                                    <br>
                                                    <div
                                                        class="form-group{{ $errors->has('project_group') ? ' has-danger' : '' }} mb-3">
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input type="hidden" name="randomGroup" value="">
                                                                <input type="checkbox" class="form-check-input"
                                                                    name="randomGroup" id="" value="checkedValue"
                                                                    checked>
                                                                Generate Random Group
                                                                <br>
                                                                <input type="checkbox" class="form-check-input"
                                                                    name="hasTime" id="" value="1"
                                                                    checked>
                                                                    Enable Time Limit
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                class="form-group{{ $errors->has('project_indicator') ? ' has-danger' : '' }} mb-3">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">

                                                    </div>
                                                  <select class ="form-control" name="kelas_id" >
                                                      <option value="">-- SELECT CLASS --</option>
                                                      @foreach($kelas as $k)
                                                        <option value = {{$k->id}}>{{$k->nama}} ({{$k->kelas_detail->count()}} Participant)</option>
                                                      @endforeach
                                                  </select>
                                                </div>


                                            </div>



                                                <input type="hidden" name="identity_number"
                                                    value={{auth()->user()->identity_number}} />
                                                <div class="modal-footer">

                                                    <input type="submit" value="Create" class="btn btn-primary"></input>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
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
                                        <th scope="col" class="sort" data-sort="name">Project</th>
                                        <th scope="col" class="sort" data-sort="name">Class</th>
                                        <th scope="col" class="sort" data-sort="name">Total Phase</th>
                                        <th scope="col" class="sort" data-sort="name">Total Group</th>
                                        <th scope="col" class="sort" data-sort="budget">Created at</th>
                                        <th scope="col" class="sort" data-sort="status">Status</th>
                                        {{-- <th scope="col">Users</th>
                    <th scope="col" class="sort" data-sort="completion">Completion</th> --}}
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($project as $p)


                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">{{$p->project_topic}}</span>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">{{$p->nama}} ({{$p->key}})</span>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">{{max(0,$p->project_phase-1)}}</span>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">{{$p->project_group}}</span>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm">{{$p->created_at}}</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td>
                                            <span class="badge badge-dot mr-4">
                                                @if($p->project_status == "pending")
                                                <i class="bg-warning"></i>
                                                <span class="status">Pending</span>
                                                @elseif($p->project_status == "completed")
                                                <i class="bg-success"></i>
                                                <span class="status">Complete</span>
                                                @elseif($p->project_status=="running")
                                                <i class="bg-info"></i>
                                                <span class="status">Running</span>
                                                @elseif($p->project_status == "final")
                                                <i class="bg-info"></i>
                                                <span class="status">Individual Assignment</span>
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
                                                        href="{{route('project.details.index', $p)}}">Setting</a>
                                                    <a class="dropdown-item"
                                                        href="{{route('project.group.index', $p)}}">Manage Group</a>
                                                    <form id="form1" action="{{ route('project.destroy', $p) }}"
                                                    onsubmit="return confirm('Are you sure you want to delete this project?');" method="POST" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" class="dropdown-item" value="Delete">
                                                    </form>
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
                            &copy; {{ now()->year }} <a href="https://www.creative-tim.com"
                                class="font-weight-bold ml-1" target="_blank">Creative Tim</a> &amp;
                            <a href="https://www.updivision.com" class="font-weight-bold ml-1"
                                target="_blank">Updivision</a>
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
                                <a href="https://www.creative-tim.com/presentation" class="nav-link"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md"
                                    class="nav-link" target="_blank">MIT License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="../assets/js/argon.js?v=1.2.0"></script>
    <script src="../assets/js/modal.js"></script>
</body>

</html>
