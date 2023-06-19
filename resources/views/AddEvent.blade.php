@extends('Layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Product</h3>
        <form action="{{route('AddingEvent')}}" method="post" enctype='multipart/form-data' >
            @csrf
            <div class="form-group">
            <label for="eventName">Event Name</label>
            <input class="form-control" type="text" id="eventName" name="eventName" required>
            </div>
            <div class="form-group">
            <label for="eventTime">Event Time</label>
            <input class="form-control" type="time" id="eventTime" name="eventTime" min="0" required>
            </div>
            <div class="form-group">
            <label for="eventDate">Date</label>
            <input class="form-control" type="date" id="eventDate" name="eventDate" required>
            </div>
            <button type="submit" class="btn btn-primary">Add New Event</button>
            
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection