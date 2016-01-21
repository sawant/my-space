@extends('layouts.default')

@section('content')

    @if(Session::has('message'))
        <h3 class="error">
            {{Session::get('message')}}
        </h3>
    @endif

    {{ Form::open() }}

        {{-- Form::label('link', 'Link:') --}}
        {{ Form::text('link', Input::old('link'), array('placeholder' => 'Insert URL to be shortened')) }}

        @if(Session::has('errors'))
            <h3 class="error">{{$errors->first('link')}}</h3>
        @endif
    {{ Form::close() }}

    @if(Session::has('link'))
        <h3 class="success">
            {{ Html::link(Session::get('link'), 'Click here for shortened URL') }}
        </h3>
    @endif

@stop