@extends('layout')
@section('main_content')
    <form method="POST" action="{{ route('posts.create') }}" enctype="multipart/form-data">
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
                {{-- <input class="form-control" type="text" name="room_desc" id="rent_amount" required> --}}
                <textarea name="room_desc" class="form-control" rows="5" required></textarea>
            </div>
            <div>
                <label for="Booking Day">Maximum Number of Booking Days</label>
                <input class="form-control" type="number" name="no_booking_day" id="rent_amount" min="1" max="14" required>
            </div>

            <div>
                <label for="image">Image Upload</label>
                <input class="form-control" type="file" name="image" id="image" accept="image/*">
            </div>


            <button class="btn btn-primary mt-4" type="submit">Create Post</button>
        </div>

    </form>
@endsection
