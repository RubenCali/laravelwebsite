@extends('master')
@section('content')
<section>
    <div class="container">
        <div class="row">

      
<form action="{{ route('post.handle') }}" method="post">
    @csrf
    <label>naam:</label>
<input type="text" name="naam" placeholder="typ hier je naam in">
@error('naam')
<p>{{$message}}</p>
@enderror
<label>Foto:</label>
<input type="file" name="foto" placeholder="Upload hier je foto">
<button type="submit">verstuur</button>

</form>
</div>
</div>
</section>
@endsection()