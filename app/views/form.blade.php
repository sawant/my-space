@extends('layouts.default')

@section('content')

    {{ Form::open() }}

        {{-- Form::label('link', 'Link:') --}}
        {{ Form::text('link', Input::old('link'), array('placeholder' => 'Insert URL to be shortened')) }}

    {{ Form::close() }}

@stop