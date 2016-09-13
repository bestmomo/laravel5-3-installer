@extends('vendor.installer.layout')

@section('style')
    <style>
        .card-panel { display: none; }
    </style>
@endsection

@section('content')
    <div class="card blue-grey darken-1">
         <form method="post" action="{{ url('install/database') }}">    
            <div class="card-content white-text">
                <p class="card-title center-align">{{ trans('installer.database.title') }}</p>
                <p class="center-align">{{ trans('installer.database.sub-title') }}</p>
                <hr>
                {!! csrf_field() !!}
                <div class="input-field">
                    <i class="material-icons prefix">settings</i>
                    <input type="text" id="dbname" name="dbname" value="{{ $database }}" required>
                    <label for="dbname">{{ trans('installer.database.dbname-label') }}</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">perm_identity</i>
                    <input type="text" id="username" name="username" value="{{ $username }}" required>
                    <label for="username">{{ trans('installer.database.username-label') }}</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="text" id="password" name="password" value="{{ $password }}">
                    <label for="password">{{ trans('installer.database.password-label') }}</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">language</i>
                    <input type="text" id="host" name="host" value="{{ $host }}" required>
                    <label for="host">{{ trans('installer.database.host-label') }}</label>
                </div>
            </div>
            <div class="card-action">
                <button class="btn waves-effect waves-light" type="submit">
                    {{ trans('installer.database.button') }}
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>             
    </div>  
    <div class="card-panel teal blue-grey darken-1">
        <div class="card-content white-text">
            {{ trans('installer.database.wait') }}
            <br>
            <div class="progress">
                <div class="indeterminate"></div>
            </div>
        </div>
    </div>  
@endsection

@section('script')
    <script>
        $(function(){
            $(document).on('submit', 'form', function(e) {  
                $('.card').hide();
                $('.card-panel').show();
            });
        })      
    </script>
@endsection