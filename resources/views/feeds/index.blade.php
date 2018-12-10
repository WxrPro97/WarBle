@extends('layouts.app')

@section('content')
    <h1>Feeds</h1>
    <br>
    @if(count($feeds) > 0)
        @foreach($feeds as $feed)
            <div class="card">
                    <div class="card-body">
                        <h3><a href="/feeds/{{$feed->id}}">{{$feed->title}}</a></h3>
                        <small>Created On: {{$feed->created_at}} by {{$feed->user->name}}</small>
                    </div>
                  </div>
            <br>
        @endforeach
        {{$feeds->links()}}
    @endif
@endsection