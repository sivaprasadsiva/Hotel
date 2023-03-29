@extends('layout')

@section('main_content')
    <h1>Welcome {{ auth()->user()->name }}</h1>
    <p>Use This Panel To Create Room</p>
@endsection
