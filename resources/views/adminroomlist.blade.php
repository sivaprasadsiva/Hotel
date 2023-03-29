@extends('layout')
@section('main_content')
    <div class="room_list row">
        <h1>Add Room List</h1>
        @foreach ($rooms as $room)
            <div class="col-4">

                <div class="card mt-5" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images') . '/' . $room->image }}" alt="Card image cap" style="width: 200px;height: 200px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $room->room_name }}</h5>
                        <p class="card-text">{{ $room->room_desc }}</p>
                        <p class="card-text">{{ $room->phone }}</p>
                    </div>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                </div>
            </div>
        @endforeach
    </div>
@endsection
