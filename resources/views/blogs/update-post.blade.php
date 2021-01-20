@extends('master')
@section('content')
<section>
    <div class="container">
        <div class="row">

            @foreach ($detailpage as $blog)

<form action="{{route('update_post')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $blog->id }}">
    <label>titel:</label><br>
<input type="text" name="titel" placeholder="Typ hier de nieuwe titel..." value="{{ $blog->titel }}"><br>
<label>Autheur:</label><br>
<input type="text" name="autheur" placeholder="Typ hier de nieuwe autheur..." value="{{ $blog->autheur }}"><br>
<label>korte beschrijving:</label><br>
<textarea name="shortDES" cols="30" rows="10" placeholder="Typ hier de nieuwe korte beschrijving...">{{ $blog->shortDES }}</textarea><br>
<label>lange beschrijving:</label><br>
<textarea name="longDES"cols="30" rows="10" placeholder="Typ hier de nieuwe lange beschrijving...">{{ $blog->longDES }}</textarea><br>
<label>datum:</label><br>
<input type="date" name="datum" value="{{ $blog->datum }}"><br>
<label>plaats:</label><br>
<input type="text" name="plaats" placeholder="Typ hier de nieuwe plaats..." value="{{ $blog->plaats }}"><br>
<label>image:</label><br>
<input type="text" name="image" placeholder="Typ hier 'test.jpg'" value="{{ $blog->image }}"><br>

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
@endforeach

</div>
</div>
</section>
@endsection()