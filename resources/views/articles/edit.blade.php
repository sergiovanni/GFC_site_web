@extends('layout')
@section('title')

<div class="container-fluid" style="width: 100% !important">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-3">Modifier l'article</p>
            <a class="btn btn-primary btn-sm ms-auto" href="{{ route('articles.index') }}">Retour</a>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('articles.index', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row g-3">
              <!-- Titre -->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="article-titre" class="form-control-label">Titre</label>
                  <input class="form-control" type="text" name="titre" id="article-titre" value="{{ old('titre', $article->titre) }}" required>
                </div>
              </div>

              <!-- Image -->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="article-image" class="form-control-label">Image de couverture</label>
                  <input type="file" class="form-control" name="image" id="article-image" accept="image/png, image/jpeg, image/webp">
                  <div class="form-text">Formats: JPG, PNG, WEBP (max 5MB)</div>
                  @if($article->image)
                    <div class="mt-2">
                      <img src="{{ asset('storage/'.$article->image) }}" alt="Image actuelle" width="150">
                    </div>
                  @endif
                </div>
              </div>
            </div>

            <!-- Éditeur de contenu -->
            <div class="row mt-3">
              <div class="col-12">
                <div class="form-group">
                  <label class="form-control-label">Contenu de l'article</label>
                  <div id="editor-container" style="min-height: 500px; color: #000;">{!! old('contenu', $article->contenu) !!}</div>
                  <textarea id="article-contenu" name="contenu" class="d-none" required>{!! old('contenu', $article->contenu) !!}</textarea>
                </div>
              </div>
            </div>

            <hr class="horizontal dark mt-3">
            <div class="d-flex justify-content-center mt-3">
              <button type="submit" class="btn btn-success btn-sm">Enregistrer les modifications</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CKEditor Script -->
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor-container'), {
      toolbar: {
        items: [
          'heading', '|',
          'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
          'blockQuote', 'insertTable', 'undo', 'redo'
        ]
      },
      language: 'fr',
      ui: {
        viewportOffset: { top: 0 }
      },
      contentStyles: `
        .ck-content { color: #000 !important; }
        .ck-editor__editable { color: #000 !important; }
      `
    })
    .then(editor => {
      editor.model.document.on('change:data', () => {
        document.getElementById('article-contenu').value = editor.getData();
      });
    })
    .catch(error => {
      console.error(error);
    });
</script>

<style>
  .ck-content, .ck-editor__editable {
    color: #000 !important;
  }
  .ck-editor__editable_inline {
    color: #000 !important;
  }
</style>
@endsection
@section('content')
