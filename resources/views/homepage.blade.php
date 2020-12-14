@extends('master')
@section('content')
@foreach ($blogs as $blog)
<section>
    <div class="container">
        <div class="row-fluid">
<a href="#">
     <img src="<?php echo asset('uploads' ) ?>/{{$blog->image}}" alt="{{ $blog->titel }}">
<h2>{{ $blog->titel }}</h2>
<p>{{ $blog->autheur }}</p>
<p>{{ $blog->shortDES }}</p>
<p>{{ $blog->longDES }}</p>
<p>{{ $blog->datum }}</p>
<p>{{ $blog->plaats }}</p>
</a>
</div>
</div>
</section>


@endforeach
@endsection()