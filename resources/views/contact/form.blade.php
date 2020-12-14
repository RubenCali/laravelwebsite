@extends('master')
@section('content')
<section>
    <div class="container">
        <div class="row">

      
<form action="{{ route('contact.handle') }}" method="post">
    @csrf
<input type="text" name="naam" placeholder="Naam ..." value=" {{ old('naam') }}"><br>
<input type="email" name="email" placeholder="Email ..." value=" {{ old('email') }}"><br>
<input type="text" name="onderwerp" placeholder="Onderwerp ..." value=" {{ old('onderwerp') }}"><br>
<textarea name="bericht" placeholder="Bericht ..." cols="30" rows="10" >{{ old('bericht') }}</textarea><br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<button type="submit">verstuur</button>

</form>
</div>
</div>
</section>
@endsection()