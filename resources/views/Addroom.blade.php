@extends('layout')
@section('main_content')
    <form method="POST" action="{{ route('posts.create') }}">
        @csrf
        <div class="p-5 m-5">
            <div>
                <label for="room_name">Room Name:</label>
                <input class="form-control" type="text" name="room_name" id="room_name" required>
            </div>

            <div>
                <label for="rent_amount">Rent Amount:</label>
                <input class="form-control" type="number" name="rent_amount" id="rent_amount" required>
            </div>

            <div>
                <label for="Room DEscription">Room Desc:</label>
                <input class="form-control" type="number" name="room_desc" id="rent_amount" required>
            </div>
            <div>
                <label for="Booking Day">Number of Minimun Booking Days</label>
                <input class="form-control" type="number" name="no_min_day" id="rent_amount" required>
            </div>
            <div>
                <label for="Booking Day">Number of Maximun Booking Days</label>
                <input class="form-control" type="number" name="no_max_day" id="rent_amount" required>
            </div>

            <button class="btn btn-primary" type="submit">Create Post</button>
        </div>

    </form>
@endsection
