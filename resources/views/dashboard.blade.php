
@extends('layouts.app')
@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card ">

                    <div class="card-body">
                        <!-- Chart -->
                        <img src = "../../argon/img/brand/doc.png" height="450px" width="900px"/>
                    </div>
                </div>
            </div>
            @if(session('status'))
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
            @if(auth()->user()->account_type == 'Guru')
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Project Summary</h3>
                            </div>

                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Participants</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($project_cnt as $p)
                                <tr>
                                    <th scope="row">
                                        {{$p->project_topic}}
                                    </th>
                                    <td>
                                        @php
                                            $total = 0 ;
                                        @endphp
                                       @foreach($p->kelompok as $k)
                                        @php
                                        $total+= $k->kelompok_detail->count();
                                        @endphp
                                       @endforeach
                                       {{$total}}
                                    </td>
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
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            @endif
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
<script src="{{ asset('assets') }}/js/modal.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
