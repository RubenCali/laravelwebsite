@extends('master')
@section('content')
@foreach ($blogs as $blog)
<h2>{{ $blog->titel }}</h2>
<p>{{ $blog->autheur }}</p>
<p>{{ $blog->shortDES }}</p>
<p>{{ $blog->longDES }}</p>
<p>{{ $blog->datum }}</p>
<p>{{ $blog->plaats }}</p>


@endforeach
@endsection()