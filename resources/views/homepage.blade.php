@extends('master')
@section('content')
@foreach ($blogs as $blog)
<section>
    <div class="container">
        <div class="row-fluid">

     
<h2>{{ $blog->titel }}</h2>
<p>{{ $blog->autheur }}</p>
<p>{{ $blog->shortDES }}</p>
<p>{{ $blog->longDES }}</p>
<p>{{ $blog->datum }}</p>
<p>{{ $blog->plaats }}</p>
</div>
</div>
</section>


@endforeach
@endsection()