@extends('layouts.master')

@section('pre-footer')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        {{ Form::open(array('route' => 'cards.store')) }}

            <h1>Submit a Listing</h1>
            <h2>Please fill in your information below. Fields marked with <a href="#">*</a> are required.</h2>
            <div class="form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
                <label>Title</label>
                {{ Form::text('title', null, array('class' => 'medium', 'placeholder' => 'Title')) }}
                {{ ($errors->has('title') ? $errors->first('title') : '') }}
                <label>Description</label>
                {{ Form::textarea('description', null, array('class' => 'medium', 'placeholder' => 'Description')) }}
            </div>

            <div class="form-group">
                <label>Location</label>
                {{ Form::text('location', null, array('class' => 'medium', 'placeholder' => 'Location')) }}
            </div>

            <div class="form-group">
                <label>Is it a Sale, a Lease or both?</label>
                {{ Form::select('size', array('sale' => 'Sale', 'lease' => 'Lease', 'sale-and-lease' => 'Sale & Lease')) }}
                <label>Residential or Commercial?</label>
                {{ Form::select('size', array('residential' => 'Residential', 'commercial' => 'Commercial')) }}
            </div>  

            <div class="form-group">
                <label>Price</label>
                {{ Form::text('price', null, array('class' => 'medium', 'placeholder' => 'XXX,XXX')) }}<label class="checkbox">AED</label>
                <label>Area</label>
                {{ Form::text('area', null, array('class' => 'medium', 'placeholder' => 'XXXX')) }}<label class="checkbox">Sq. Feet</label>
            </div>
            
            <div class="form-group">
            {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
            </div>
            
        {{ Form::close() }}
    </div>
</div>
@stop