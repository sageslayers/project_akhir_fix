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

                        </ul>
                    </div>
                </li>
                @if(auth()->user()->account_type == "Guru")
                <li class="nav-item">
                <a class="nav-link active" href="{{ route('project.index') }}">
                        <i class="ni ni-atom" ></i>
                        <span class="nav-link-text" >{{ __('Manage Project') }}</span>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('project.index')}}">
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
    </div>
  </nav>
