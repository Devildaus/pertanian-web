@extends('layouts.main')
<!-- @include('loader') -->
@section('container')
@include('split.image')
<h1 style="margin-top:50px; margin-bottom: 50px;">What's New</h1>
@if ($blogs->count())
<div class="container">
        <div class="row">
                @foreach ($blogs as $post)
                <div class="col-md-4">
                        <div class="card" style="width: 20rem; margin-bottom:3rem;">
                                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7); border-radius: 20px;"><a href="/posts?category={{ $post->category->slug ?? 'unknown' }}" class="text-decoration-none text-white"> {{ $post->category->name  ?? 'unknown' }}</a></div>
                                @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" style="width:300px; height: 300px; margin:2px auto;" class="card-img-top" alt="{{ $post->category->name ?? 'unknown'  }}">

                                @else
                                <img src="https://source.unsplash.com/500x500?{{ $post->category->name ?? 'unknown' }}" style="width:300px; height: 300px; margin:2px auto;" class="card-img-top" alt="{{ $post->category->name ?? 'unknown'  }}">

                                @endif
                                <div class="card-body">
                                        <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                                        <p>
                                                <small class="text-muted">
                                                        By. <a href="/post?author={{ $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                                </small>
                                        </p>
                                        <p class="card-text">{{ $post->excerpt }}</p>
                                        <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
                                </div>
                        </div>
                </div>
                @endforeach
        </div>
</div>
<div class="d-flex justify-content-end mt-4">
        <button class="btn btn-primary" style="margin-bottom:4rem;">
                <a href="/posts?category={{ $post->category->name }}" class="text-decoration-none text-white">Lebih Banyak</a>
        </button>
</div>
@else
<p class="text-center fs-4">Not Found</p>
@endif

@endsection