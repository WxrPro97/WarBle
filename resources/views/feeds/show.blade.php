@extends('layouts.app')

@section('content')
    <a href="/feeds" class="btn btn-primary">Back</a>
    <hr>
    <h1>{{$feed->title}}</h1>
    <br>
    <div>
        {!!$feed->body!!}
    </div>
    <br>
    <small>Created At: {{$feed->created_at}} by {{$feed->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $feed->user_id)
            <a href="/feeds/{{$feed->id}}/edit" class="btn btn-info">Edit</a>

        {!!Form::open(['action' => ['FeedsController@destroy', $feed->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}

        @endif
    @endif
@endsection