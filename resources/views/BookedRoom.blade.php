@extends('layout')
@section('main_content')
<table class="table">
    <thead>
      <tr>
        <th>Room Name</th>
        <th>Booking Date</th>
        <th>No of Day Staying</th>
        <th>Name of User</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($books as $user): ?>
        <tr>
          <td>{{ $user->room_name }}</td>
          <td>{{ $user->bookingdate }}</td>
          <td>{{ $user->nobookingdate }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->phonenumber }}</td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

@endsection
