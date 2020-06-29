<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    @if(auth()->user()->account_type == "Guru")
                                    <h5 class="card-title text-uppercase text-muted mb-0">Project Assigned</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$project_cnt->count()}}</span>
                                    @else
                                    <h5 class="card-title text-uppercase text-muted mb-0">Running Project</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$project_cnt2}}</span>
                                    @endif

                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    @if(auth()->user()->account_type == "Guru")
                                    <h5 class="card-title text-uppercase text-muted mb-0">Registered Class</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$kelas_guru_cnt}}</span>
                                    @else
                                    <h5 class="card-title text-uppercase text-muted mb-0">Joined Class</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$kelas_siswa_cnt}}</span>
                                    @endif
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Teachers</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$teacher_cnt}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-green text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Students</h5>
                                    <span class="h2 font-weight-bold mb-0">{{$student_cnt}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
