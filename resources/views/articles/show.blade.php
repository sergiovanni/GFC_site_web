@extends('layout')

@section('title')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <a href="{{ route('welcome') }}" class="btn btn-light mb-4">
                &larr; Retour à l'accueil
            </a>
            
            <h1 class="display-5 fw-bold">{{ $article->titre }}</h1>
            
            <div class="d-flex align-items-center mb-4 text-muted">
                <span class="me-3">
                    Publié le {{ $article->created_at->format('d M Y') }}
                </span>
                {{-- <span>
                    Temps de lecture: {{ ceil(str_word_count(strip_tags($article->contenu) / 200) }} min
                </span> --}}
            </div>
            
            @if($article->image_path)
            <img src="{{ asset('storage/'.$article->image_path) }}" 
                 class="img-fluid rounded mb-4" 
                 alt="{{ $article->titre }}">
            @endif
            
            <div class="article-content">
                {!! $article->contenu !!}
            </div>
            
            <div class="mt-5 pt-4 border-top">
                <a href="{{ route('welcome') }}" class="btn btn-outline-primary">
                    &larr; Retour à l'accueil
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .article-content {
        line-height: 1.8;
        font-size: 1.1rem;
    }
    .article-content img {
        max-width: 100%;
        height: auto;
        margin: 1rem 0;
    }
</style>
@endsection
@section('content')