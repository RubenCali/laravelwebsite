@extends('master')
@section('content')
<section>
    <div class="container">
        <div class="row">

      
<form action="{{ route('contact.handle') }}" method="post">
    @csrf
    <label>naam:</label>
<input type="text" name="naam" placeholder="typ hier je naam in">
@error('naam')
<p>{{$message}}</p>
@enderror
<button type="submit">verstuur</button>

</form>
</div>
</div>
</section>
@endsection()