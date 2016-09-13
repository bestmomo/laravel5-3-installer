@extends('vendor.installer.layout')

@section('content')
    <div class="card red lighten-1">
        <div class="card-content white-text">
            <p class="card-title center-align">{{ trans('installer.permission-error.title') }}</p>
            <hr>
            <p>{{ trans('installer.permission-error.sub-title') }} <strong> {{ $permissionCheck . '.'}} </strong></p>
            <br>
            <p><em>{{ trans('installer.permission-error.message')}}<em></p>
        </div>
    </div>
@endsection