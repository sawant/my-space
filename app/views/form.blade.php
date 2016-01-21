@extends('layouts.default')

@section('content')

    {{ Form::open() }}

        {{-- Form::label('link', 'Link:') --}}
        {{ Form::text('link', Input::old('link'), array('placeholder' => 'Insert URL to be shortened')) }}

        @if(Session::has('errors'))
            <h3 class="error">{{$errors->first('link')}}</h3>
        @endif
    {{ Form::close() }}

@stop