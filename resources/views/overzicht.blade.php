@extends('master')
@section('content')

<section>
    <div class="container">
        <div class="row-fluid">
            <div class="blog">
            @foreach ($blogs as $blog)
            <div class="blog__post">
                
                    <a href="{{URL::to("blog/{$blog->id}")}} ">
                        <img src="<?php echo asset('uploads' ) ?>/{{$blog->image}}" alt="{{ $blog->titel }}">
                        <p>{{ $blog->plaats }}</p>

                    <h2>{{ $blog->titel }}</h2>
                    <p>{{ $blog->shortDES }}</p>
                    <a href="{{URL::to("blog/{$blog->id}")}}">Lees meer...</a>
                    <p>{{ $blog->datum }}</p>
                    </a>
             </div> 
            @endforeach

            </div>
          

        </div>
    </div>
</section>



@endsection 