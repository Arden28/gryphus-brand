@extends('dashboard::layouts.master')

@section('title', 'Toutes les bannières')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <h5 class="card-header">Bannières</h5>
      <button
        type="button"
        class="btn btn-primary"
        data-bs-toggle="modal"
        data-bs-target="#bannerModal"
      >
        Ajouter +
      </button>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Titre</th>
              <th>Description</th>
              <th>Photo</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
              @foreach ($banners as $b)
              <tr>
                  <td>
                      {{ $b->title }}
                  </td>
                  <td>
                      {!! $b->description !!}
                  </td>
                  <td>
                      <td><span class="badge {{ $c->status == 'active' ? 'bg-label-primary' : 'bg-label-warning' }} me-1">Active</span></td>
                  <td>
                  <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i> Supprimer</a
                      >
                      </div>
                  </div>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="bannerModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Ajouter une bannière</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
        <form action="{{ route('banner.store') }}" method="POST">
            <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col mb-3">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Nom de la bannière" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="description" class="form-label">Texte</label>
                            <textarea name="description" class="form-control" placeholder="Description de la bannière" id="description" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="status" class="form-label">Statut</label>
                            <select name="status" id="status" class=" form-control select">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" id="photo" name="photo" class="form-control" placeholder="Image de la bannière" />
                    </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Fermer
                </button>
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
