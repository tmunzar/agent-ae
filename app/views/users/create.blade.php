@extends('layouts.master')

@section('pre-footer')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        {{ Form::open(array('route' => 'users.store')) }}

            <h1>Register</h1>
            <h2>Please fill in your information below. Fields marked with <a href="#">*</a> are required.</h2>
            <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                <label>email</label>
                {{ Form::text('email', null, array('class' => 'medium', 'placeholder' => 'E-mail')) }}
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }} {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                <label>Password</label>
                {{ Form::password('password', array('class' => 'medium display-block', 'placeholder' => 'Password')) }}
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
                <label>Confirm Password</label>
                {{ Form::password('password_confirmation', array('class' => 'medium display-block', 'placeholder' => 'Confirm Password')) }}
                {{ ($errors->has('password_confirmation') ?  $errors->first('password_confirmation') : '') }}
            </div>

            <div class="form-group">
                <label>Name</label>
                {{ Form::text('first_name', null, array('class' => 'medium', 'placeholder' => 'First Name')) }}
                {{ Form::text('last_name', null, array('class' => 'medium', 'placeholder' => 'Last Name')) }}
                <label>Which languages do you speak?</label>
                <label class="checkbox">English</label> {{ Form::checkbox('language[0]', 'english'); }} 
                <label class="checkbox">Arabic</label> {{ Form::checkbox('language[1]', 'arabic'); }}
                <label class="checkbox">Urdu</label> {{ Form::checkbox('language[2]', 'urdu'); }} 
                <label>Which company do you belong to?</label>
                {{ Form::text('company', null, array('class' => 'medium', 'placeholder' => 'Company Name')) }}
                <label>Broker Number</label>
                {{ Form::text('broker_number', null, array('class' => 'medium', 'placeholder' => '000-00-12345')) }}
            </div>  

            <div class="form-group">
                <label>Phone Number</label>
                {{ Form::text('phone_number', null, array('class' => 'medium', 'placeholder' => '000-00-12345')) }}
            </div>

            <div class="form-group">
                <label>Your phone number is hidden by default. Do you want to make it visible to other member agents of Agent.ae?</label>
                {{ Form::checkbox('show_phone_number', '1'); }} <label class="checkbox">Yes let other members see my phone number</label>
            </div>
            
            <div class="form-group">
            {{ Form::submit('Register', array('class' => 'btn btn-primary')) }}
            </div>
            
        {{ Form::close() }}
    </div>
</div>
@stop