@extends('master')
@section('content')
<section>
    <div class="container">
        <div class="row">

      
<form action="{{ route('post.handle') }}" method="post">
    @csrf
    <label>titel:</label><br>
<input type="text" name="titel" placeholder="Typ hier de titel..." value="{{ old('titel') }}"><br>
<label>Autheur:</label><br>
<input type="text" name="autheur" placeholder="Typ hier de autheur..." value="{{ old('autheur') }}"><br>
<label>korte beschrijving:</label><br>
<textarea name="shortDES" cols="30" rows="10" placeholder="Typ hier de korte beschrijving...">{{ old('shortDES') }}</textarea><br>
<label>lange beschrijving:</label><br>
<textarea name="longDES"cols="30" rows="10" placeholder="Typ hier de lange beschrijving...">{{ old('longDES') }}</textarea><br>
<label>datum:</label><br>
<input type="date" name="datum" value="{{ old('datum') }}"><br>
<label>plaats:</label><br>
<input type="text" name="plaats" placeholder="Typ hier de plaats..." value="{{ old('plaats') }}"><br>
<label>image:</label><br>
<input type="text" name="image" placeholder="Typ hier 'test.jpg'" value="{{ old('image') }}"><br>

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