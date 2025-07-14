@extends('layout')
@section('title')

<!-- Chargement de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="page-title-heading">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3 d-flex justify-content-between">
                    <h6>Tous mes articles</h6>
                    <a class="btn bg-gradient-dark mb-0" href="{{ route('articles.create') }}">
                        <i class="fas fa-plus"></i>&nbsp;&nbsp;Ajouter un article
                    </a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Titre</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $article)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $article->titre }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-xs text-secondary mb-0">
                                                    {{ $article->created_at->format('d M Y') }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="align-middle text-center">
                                        <div class="d-flex justify-content-center gap-2">
                                            <!-- Bouton Voir (Vert) -->
                                            <a 
                                            href="{{ route('articles.lecture', $article->id) }}" 
                                               class="btn btn-sm bg-gradient-success text-white px-3 mb-0"
                                               data-bs-toggle="tooltip" 
                                               title="Voir">
                                                <i class="fas fa-eye fa-fw"></i>
                                            </a>
                                            
                                            <!-- Bouton Modifier (Bleu) -->
                                            {{-- <a href="{{ route('articles.edit', $article->id) }}" 
                                               class="btn btn-sm bg-gradient-info text-white px-3 mb-0"
                                               data-bs-toggle="tooltip" 
                                               title="Modifier">
                                                <i class="fas fa-edit fa-fw"></i>
                                            </a> --}}
                                            
                                            <!-- Bouton Supprimer (Rouge) -->
                                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="btn btn-sm bg-gradient-danger text-white px-3 mb-0"
                                                        data-bs-toggle="tooltip" 
                                                        title="Supprimer"
                                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                                                    <i class="fas fa-trash-alt fa-fw"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="px-4 pt-4">
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Activation des tooltips Bootstrap 5
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>

@endsection
@section('content')