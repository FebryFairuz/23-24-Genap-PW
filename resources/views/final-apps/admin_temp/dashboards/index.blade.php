@extends('final-apps.admin_temp.Layout')

@section('content')

@include('final-apps.admin_temp.templates.toolbar', ['title' => 'Dashboard', 'subTitle' => 'Ini page dashboardlah'])

<div class="post d-flex flex-column-fluid" id="kt_post">
    <div class="container-xxl" id="kt_content_container">
        <div class="mt-5">
            <h1>ini dashboard</h1>
        </div>
    </div>
</div>

@endsection
