@extends('layouts.main-layout')
@section('content')
    <a class="btn btn-primary" href="{{ route('postcard.create') }}">ADD POSTCARD</a>

    <postcards-component></postcards-component>
@endsection