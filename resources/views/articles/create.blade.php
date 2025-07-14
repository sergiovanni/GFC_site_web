@extends('layout')
@section('title')

<div class="container-fluid" style="width: 100% !important">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-3">Enregistrer un Article</p>
            <a class="btn btn-primary btn-sm ms-auto" href="{{ route('articles.index') }}">Retour</a>
          </div>
        </div>
        <div class="card-body">
          <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row g-3">
              <!-- Titre -->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="article-titre" class="form-control-label">Titre</label>
                  <input class="form-control" type="text" name="titre" id="article-titre" required>
                </div>
              </div>
              
              <!-- Image -->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="article-image" class="form-control-label">Image de couverture</label>
                  <div class="custom-file">
                    <input type="file" class="form-control" name="image" id="article-image" accept="image/png, image/jpeg, image/webp">
                    <div class="form-text">Formats: JPG, PNG, WEBP (max 5MB)</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Éditeur de contenu avec texte noir -->
            <div class="row mt-3">
              <div class="col-12">
                <div class="form-group">
                  <label class="form-control-label">Contenu de l'article</label>
                  <div id="editor-container" style="min-height: 500px; color: #000;"></div>
                  <textarea id="article-contenu" name="contenu" class="d-none" required></textarea>
                </div>
              </div>
            </div>

            <hr class="horizontal dark mt-3">
            <div class="d-flex justify-content-center mt-3">
              <button type="submit" class="btn btn-success btn-sm">Enregistrer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CKEditor 5 avec configuration pour texte noir -->
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
      // Force la couleur du texte en noir
      ui: {
        viewportOffset: { top: 0 }
      },
      // Configuration supplémentaire pour la couleur du texte
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
  /* Style supplémentaire pour garantir le texte noir */
  .ck-content, .ck-editor__editable {
    color: #000 !important;
  }
  .ck-editor__editable_inline {
    color: #000 !important;
  }
</style>
@endsection
@section('content')