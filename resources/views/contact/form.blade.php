@extends('master')
@section('content')
<form action="{{ route('contact.handle') }}" method="post">
    @csrf
    <label>naam:</label>
<input type="text" name="naam" placeholder="typ hier je naam in">
@error('naam')
<p>{{$message}}</p>
@enderror
<button type="submit">verstuur</button>

</form>
@endsection('content')