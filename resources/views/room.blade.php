@extends('booking')
@section('room_content')
    <h1>Room List</h1>

    <div class="col-sm-6">
        <div class="card mt-5" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('images') . '/' . $room->image }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $room->room_name }}</h5>
                <p class="card-text">{{ $room->room_desc }}</p>
                <form action="{{ route('booking') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Date</label>
                        <input class="form-control" id="mail" type="date" name="date">
                    </div>
                    <div class="form-group">
                        <label for="name">Days of Stay</label>
                        <input class="form-control" id="mail" type="number" name="nobookingdate">
                    </div>
                    {{-- hidden  --}}

                    <div class="form-group" style="display: none;">
                        <label for="name">Date</label>
                        <input class="form-control" id="mail" type="text" name="user_id"
                            value="{{ $room->user_id }}">
                    </div>

                    <div class="form-group" style="display: none;">
                        <label for="name">Date</label>
                        <input class="form-control" id="mail" type="text" name="id"
                            value="{{ $room->id }}">
                    </div>

                    <div class="form-group" style="display: none;">
                        <label for="name">Date</label>
                        <input class="form-control" id="mail" type="text" name="room_name"
                            value="{{ $room->room_name }}">
                    </div>

                    {{-- <a href="{{ route('booking') }}" class="btn btn-primary mt-3">{{ $room->rent_amount }}</a> --}}
                    <input type="submit" value="save">
                </form>
            </div>
            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
        </div>
    </div>
@endsection
