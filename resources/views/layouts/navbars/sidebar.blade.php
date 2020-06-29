<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new Class</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{route('kelas.store')}}" method="post">
                    @csrf
                <input type="text" name="nama" class="form-control" placeholder="Nama Kelas" required >
                <br>
                <input type="text" name="key" class="form-control" placeholder="Kode Kelas" required >
            <input type="hidden" name="identity_number" value="{{auth()->user()->identity_number}}" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Insert" >
            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modelId33" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Join new Class</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{route('kelas.join')}}" method="post">
                    @csrf

                <input type="text" name="key" class="form-control" placeholder="Kode Kelas" required >

            <input type="hidden" name="identity_number" value="{{auth()->user()->identity_number}}" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Join" >
            </form>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ auth()->user()->avatar }}">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.edit') }}">
                            <i class="fa fa-user" ></i>
                            <span class="nav-link-text" >{{ __('Edit Profile') }}</span>
                        </a>
                    </li>
                @if(auth()->user()->account_type == "Guru")
                <li class="nav-item">
                <a class="nav-link" href="{{ route('project.index') }}">
                        <i class="ni ni-app" ></i>
                        <span class="nav-link-text" >{{ __('Project') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples2" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="fa fa-users" ></i>
                        <span class="nav-link-text" >{{ __('Class') }}</span>

                    </a>

                    <div class="collapse" id="navbar-examples2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('profile.edit') }}" data-toggle="modal" data-target="#modelId">

                                    {{ __('Add Class') }}
                                </a>
                            </li>
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('kelas.index') }}">

                                    {{ __('Manage Class') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples2" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="fa fa-users" ></i>
                        <span class="nav-link-text" >{{ __('Class') }}</span>

                    </a>

                    <div class="collapse" id="navbar-examples2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('profile.edit') }}" data-toggle="modal" data-target="#modelId33">

                                    {{ __('Join Class') }}
                                </a>
                            </li>
                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('kelas.indexsiswa') }}">

                                    {{ __('Manage Class') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('project.index')}}">
                            <i class="ni ni-atom" ></i>
                            <span class="nav-link-text" >{{ __('Project List') }}</span>
                        </a>
                </li>
                @endif

            </ul>


            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->

        </div>

    </div>

</nav>
