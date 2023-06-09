@extends('user_layout')
@section('main_content')
    <div class="room_list row">
        <h1>Room List</h1>
        @if (session()->has('success'))
            <div class="alert alert-danger">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        @foreach ($rooms as $room)
            <div class="col-4">

                <div class="card mt-5" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images') . '/' . $room->image }}" alt="Card image cap" style="width: 200px;height: 200px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $room->room_name }}</h5>
                        <p class="card-text">{{ $room->room_desc }}</p>
                        <p class="card-text">{{ $room->phone }}</p>
                        <a href="{{ route('book', ['id' => $room->id]) }}"
                            class="btn btn-primary">{{ $room->rent_amount }}</a>
                    </div>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                </div>
            </div>
        @endforeach
    </div>
@endsection
