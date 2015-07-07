@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Register New Account </h3>
            </div>
            <div class="panel-body">
                {{ Form::open(['route' => 'register_path']) }}
                    <fieldset>
                        <div class="form-group">
                            {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::password('confirm_password', ['class' => 'form-control', 'placeholder' => 'Confirm Password']) }}
                        </div>

                        <!-- Change this to a button or input when using this as a form -->

                        {{ Form::submit('Sign Up', ['class' => 'btn btn-lg btn-success btn-block']) }}
                    </fieldset>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop
