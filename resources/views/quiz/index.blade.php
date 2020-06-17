{{-- {{dd($data)}} --}}
@php
$topic = $data->pluck('project_topic')->first();
$subtopic = $data->pluck('project_subtopic')->first();
$bc = $data->pluck('project_kd')->first();
$indicator = $data->pluck('project_indicator')->first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <title>LearnQ</title>
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
<table class="table">
    <thead>
        <tr>
            <th><strong>Topic :</strong> </th>
            <th>{{$topic}}</th>
        </tr>
        <tr>
            <th><strong>Sub Topic : </strong></th>
            <th>{{$subtopic}}</th>
        </tr>
        <tr>
            <th><strong>Basic Competencies : </strong></th>
        <th>{{$bc}}</th>
        </tr>
        <tr>
            <th><strong>Indicator : </strong></th>
            <th>{{$indicator}}</th>
        </tr>
    </thead>
</table>
<br><br><br><br>


<div class="table-responsive">
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>

          <th scope="col" class="sort" data-sort="name"> <strong>Identity Number</strong></th>
          <th scope="col" class="sort" data-sort="budget"><strong>Name</strong></th>
          <th scope="col" class="sort" data-sort="budget"><strong>Score</strong></th>
          <th scope="col" class="sort" data-sort="status"><strong>Updated Time</strong></th>
          <th scope="col"></th>

        </tr>
      </thead>
      <tbody class="list">



        @foreach($data as $d)
        <tr>
          <th scope="row">
            <div class="media align-items-center">
              <div class="media-body">
                <span class="name mb-0 text-sm">{{$d->identity_number}}</span>
              </div>
            </div>
          </th>
            <td>
              <span class="badge badge-dot mr-4">
                <span class="name mb-0 text-sm">{{$d->name}}</span>
                </span>
            </td>
          <td>
            <span class="badge badge-dot mr-4">
                {{$d->nilai}}
            </span>
          </td>
          <td>
              <span class="badge badge-dot mr-4">
                {{$d->updated_at}}
              </span>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</body>
</html>
