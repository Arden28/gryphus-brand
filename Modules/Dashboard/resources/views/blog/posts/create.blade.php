@extends('dashboard::layouts.master')

@section('title', 'Ajouter un article')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Articles / <span>Ajouter un article</span></h4>
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Ajouter un article</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
            @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Titre</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="basic-default-name" placeholder="Titre de l'article" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="summary">Résumé</label>
            <div class="col-sm-10">
                <textarea name="summary" placeholder="Ecrivez ici, un résumé de votre article" class="form-control select" id="summary" cols="10" rows="10"></textarea>
                <x-input-error :messages="$errors->get('summary')" class="mt-2" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="description">Contenus de l'article</label>
            <div class="col-sm-10">
                <textarea name="description" placeholder="Ecrivez ici le contenus de votre article" class="form-control select" id="description" cols="10" rows="10"></textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
          </div>
          <div class="row g-2">
              <div class="col mb-0">
                  <label for="category" class="form-label">Catégorie</label>
                  <select name="post_cat_id" id="category" class=" form-control select">
                      <option value="">Choisissez une catégorie</option>
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->title }}</option>
                      @endforeach
                  </select>
                      <x-input-error :messages="$errors->get('post_cat_id')" class="mt-2" />
              </div>
              <div class="col mb-0">
                  <label for="size" class="form-label">Etiquette(s)</label>
                  <select name="tags[]" multiple  data-live-search="true" class="form-control selectpicker">
                      <option value="">--Selectionnez vos étiquettes--</option>
                      @foreach($tags as $key=>$data)
                          <option value='{{$data->title}}'>{{$data->title}}</option>
                      @endforeach
                  </select>
                  <x-input-error :messages="$errors->get('size')" class="mt-2" />
              </div>
          </div>
          <div class="row g-2">
                <div class="col mb-0">
                    <label for="added_by" class="form-label">Auteur</label>
                    <select name="added_by" id="author" class=" form-control select">
                        <option value="">Qui est l'auteur de cet article ?</option>
                        @foreach ($authors as $author)
                            <option {{ $author->id == Auth::user()->id ? 'selected' : '' }} value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('added_by')" class="mt-2" />
                </div>
                <div class="col mb-0">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class=" form-control select">
                        <option value="active" selected>Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="photo">Photos</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <input
                  type="file"
                  id="photo"
                  class="form-control"
                  multiple
                  name="photos"
                />
                <x-input-error :messages="$errors->get('photos')" class="mt-2" />
              </div>
              <div class="form-text">Vous pouvez charger max: 4 images. Dim: 500px x 500px</div>
            </div>
          </div>

          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Sauvegarder</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
@endsection
