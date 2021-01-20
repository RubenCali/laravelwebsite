@extends('master')
@section('content')

<section>
    <div class="container">
        <div class="row-fluid">
            <div class="blog">
            @foreach ($detailpage as $blog)
            <div class="blog__post">
                
                        <img src="<?php echo asset('uploads' ) ?>/{{$blog->image}}" alt="{{ $blog->titel }}">
                        <p>{{ $blog->plaats }}</p>

                    <h2>{{ $blog->titel }}</h2>
                    <p>{{ $blog->longDES }}</p>
                    <p>{{ $blog->datum }}</p>
                    
             </div> 
            @endforeach

            </div>

        </div>
    </div>
</section>

@endsection 