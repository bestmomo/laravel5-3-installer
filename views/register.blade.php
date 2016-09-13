@extends('vendor.installer.layout')

@section('style')
    <style>
        input { margin-bottom: 2px !important };
    </style>
@endsection

@section('content')
    <div class="card blue-grey darken-1 white-text">
         <form method="post" action="{{ url('install/register') }}">    
            <div class="card-content">
                <p class="card-title center-align">{{ trans('installer.register.title') }}</p>
                <p class="center-align">{{ trans('installer.register.sub-title') }}</p>
                <hr>
                {!! csrf_field() !!}
                @foreach($fields as $key => $value)
                    <div class="input-field">
                        <input type="{{ $value }}" id="{{ $key }}" name="{{ $key }}" value="{{ old($key) }}">
                        <label for="{{ $key }}">
                            {{ trans('installer.register.base-label') . trans('installer.register-fields.' . $key)}}
                        </label>
                        @if ($errors->has($key))
                            <small class="red-text text-lighten-2">{{ $errors->first($key) }}</small>
                        @endif
                    </div>
                @endforeach
            </div>
            <div class="card-action">
                <p><em>{{ trans('installer.register.message') }}</em></p>
                <button class="btn waves-effect waves-light" type="submit">
                    {{ trans('installer.register.button') }}
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
@endsection