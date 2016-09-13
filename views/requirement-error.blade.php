@extends('vendor.installer.layout')

@section('content')
    <div class="card red lighten-1">
        <div class="card-content white-text">
            <p class="card-title center-align">{{ trans('installer.requirement-error.title') }}</p>
            <hr>
            @if($requirementCheck == "PHP")
                <p>{{ trans('installer.requirement-error.php-version') }} <strong> {{ PHP_VERSION . '.'}} </strong></p>
            @else
                <p>{{ trans('installer.requirement-error.requirement') }} <strong> {{ $requirementCheck . '.'}} </strong></p>
            @endif
            <br>
            <p><em>{{ trans('installer.requirement-error.message')}}<em></p>
        </div>
    </div>
@endsection