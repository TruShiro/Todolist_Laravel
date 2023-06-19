@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Edit Product</h3>
        <form action="{{ route('updateEvent')}}" method="POST" enctype="multipart/form-data">
            @CSRF
            @foreach($Events as $Event)
            <div class="form-group">
                <img src="" alt="" width="100" class="img-fluid"><br>
            <label for="eventName">Event Name</label>
            <input type="hidden" name="id" value="{{$Event->id}}">
            <input class="form-control" type="text" id="eventName" name="eventName" required value="{{$Event->name}}"> 
            
            </div>
            <div class="form-group">
            <label for="eventTime">Event Time</label>
            <input class="form-control" type="time" id="eventTime" name="eventTime" required value="{{$Event->time}}">
            </div>
            <div class="form-group">
            <label for="eventDate">Event Date</label>
            <input class="form-control" type="date" id="eventDate" name="eventDate" required value="{{$Event->date}}">
            </div>
            <div class="form-group">
            <label for="eventStatus">Event Status</label>
            <select class="form-control" id="eventStatus" name="eventStatus" required>
            <option value="todo" {{$Event->status=='todo'?'selected':''}}>Haven't Done</option>
            <option value="ongoing" {{$Event->status=='ongoing'?'selected':''}}>On Going</option>
            <option value="done" {{$Event->status=='done'?'selected':''}}>Done</option></select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        @endforeach
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection