@extends('layouts.app') 
@section('content')
<h1>{{$title}}</h1>
<p>WarBle your moment and We Share to the world for you.</p>
<div>
    {!! $map['js'] !!} {!! $map['html'] !!}
</div>

<br>

<div>
    <form>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="Enter email">
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label>Phone number</label>
            <input type="password" class="form-control" placeholder="Phone Number">
            <small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" rows="3" placeholder="Your Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection