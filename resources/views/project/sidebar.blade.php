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
            <!-- Button trigger modal -->


            <!-- Modal -->
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


          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->

        </div>
      </div>
    </div>
  </nav>
