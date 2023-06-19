@extends('Layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Event Name</td>
                    <td>Time</td>
                    <td>Date</td>
                    <td>Status</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
            @foreach($Events as $Event)
                <tr>
                    <td>{{$Event->id}}</td>
                    <td>{{$Event->name}}</td>
                    <td>{{$Event->time}}</td>
                    <td>{{$Event->date}}</td>
                    <td>{{$Event->status}}</td>
                    <td><a href="{{ route('editEvent',['id'=>$Event->id])}}" class="btn btn-warning btn-xs">Edit</a>&nbsp;
                    <a href="{{route('deleteEvent',['id'=>$Event->id])}} " class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection