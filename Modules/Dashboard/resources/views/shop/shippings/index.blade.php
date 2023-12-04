@extends('dashboard::layouts.master')

@section('title', "Tous les frais de port")

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
              <div class="card">
                <h5 class="card-header">Expéditions</h5>
                <button
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#shippingModal"
                >
                  Ajouter +
                </button>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Titre</th>
                        <th>Montant</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($shippings as $s)
                        <tr>
                            <td>{{ $s->title }}</td>
                            <td>{{ $s->amount ?? '/' }}</td>
                            <td></td>
                            <td><span class="badge {{ $s->status == 'active' ? 'bg-label-primary' : 'bg-label-warning' }} me-1">Active</span></td>
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
<div class="modal fade" id="shippingModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Ajouter une expédition</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
        <form action="{{ route('shipping.store') }}" method="POST">
            <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col mb-3">
                            <label for="title" class="form-label">Nom de la Catégorie</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Nom de la catégorie" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="summary" class="form-label">Description de la Catégorie</label>
                            <textarea name="summary" class="form-control" placeholder="Description de la Catégorie" id="summary" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="parent" class="form-label">Catégorie Parent</label>
                            <select name="parent_id" id="parent" class=" form-control select">
                                <option value="">Choisissez une catégorie</option>
                                @foreach ($sategories as $shipping)
                                    <option value="{{ $shipping->id }}">{{ $shipping->title }}</option>
                                @endforeach
                            </select>
                        </div>
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
                        <input type="file" id="photo" name="photo" class="form-control" placeholder="Image de la catégorie" />
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
