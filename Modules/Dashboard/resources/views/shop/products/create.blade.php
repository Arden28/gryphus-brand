@extends('dashboard::layouts.master')

@section('title', 'Ajouter un produit')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produits / <span>Ajouter un produit</span></h4>
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Ajouter un produit</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Nom du produit</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="basic-default-name" placeholder="Gry ONe" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="summary">Courte présentation</label>
            <div class="col-sm-10">
                <textarea name="summary" class="form-control select" id="summary" cols="10" rows="10"></textarea>
                <x-input-error :messages="$errors->get('summary')" class="mt-2" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="description">Description du produit</label>
            <div class="col-sm-10">
                <textarea name="description" class="form-control select" id="description" cols="10" rows="10"></textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="photo">Photos</label>
            <div class="col-sm-10"> <div class="input-group">
                <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="fa fa-picture-o"></i> Choose
                  </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="photos">
              </div>
              <img id="holder" style="margin-top:15px;max-height:100px;">

                <x-input-error :messages="$errors->get('photos')" class="mt-2" />
              <div class="form-text">Vous pouvez charger max: 4 images. Dim: 300 x 300</div>
            </div>
          </div>
          <div class="row g-2">
              <div class="col mb-0">
                  <label for="category" class="form-label">Catégorie</label>
                  <select name="category_id" id="category" class=" form-control select">
                      <option value="">Choisissez une catégorie</option>
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->title }}</option>
                      @endforeach
                      <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                  </select>
              </div>
              <div class="col mb-0">
                  <label for="size" class="form-label">Taille</label>
                  <select name="size" id="size" class=" form-control select">
                      <option value="M"><Main></Main></option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                      <option value="XXL">XXL</option>
                  </select>
                  <x-input-error :messages="$errors->get('size')" class="mt-2" />
              </div>
          </div>
          <div class="row g-2">
                <div class="col mb-0">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" name="stock" id="stock" class=" form-control" placeholder="Quel est la quantité disponible de votre produit ?">
                    <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                </div>
                <div class="col mb-0">
                    <label for="price" class="form-label">Prix unitaire</label>
                    <input type="number" name="price" id="price" class=" form-control" placeholder="Quel est le prix unitaire de votre produit ?">
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>
          </div>
          <div class="row g-2">
                <div class="col mb-0">
                    <label for="condition" class="form-label">Condition</label>
                    <select name="condition" id="condition" class=" form-control select">
                        <option value="default">Par défaut</option>
                        <option selected value="new">Nouveau</option>
                        <option value="hot">Tendance</option>
                    </select>
                    <x-input-error :messages="$errors->get('condition')" class="mt-2" />
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
          <div class="row g-2">
                <div class="col mb-0">
                    <label for="discount" class="form-label">Réduction</label>
                    <input type="number" name="discount" id="discount" class=" form-control">
                    <x-input-error :messages="$errors->get('discount')" class="mt-2" />
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

@section('script')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
     $('#lfm').filemanager('image');
</script>
@endsection
