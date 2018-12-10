@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="/feeds/create" class="btn btn-primary float-right">Create Feed</a>
                    <h4>Your Feeds</h4>
                    <br>
                    @if(count($feeds) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($feeds as $feed)
                            <tr>
                                <td>{{$feed->title}}</td>
                                <td><a href="/feeds/{{$feed->id}}/edit" class="btn btn-primary">Edit</a></td>
                                <td>
                                        {!!Form::open(['action' => ['FeedsController@destroy', $feed->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @else
                        <p>You have No Feeds</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
