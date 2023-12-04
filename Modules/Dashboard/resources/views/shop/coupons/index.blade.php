@extends('dashboard::layouts.master')

@section('title', 'Tous les coupons')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
              <div class="card">
                <h5 class="card-header">Coupons</h5>
                <button
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#couponModal"
                >
                  Ajouter +
                </button>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Début</th>
                        <th>Fin</th>
                        <th>Code</th>
                        <th>Type</th>
                        <th>Valeur</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($coupons as $c)
                        <tr>
                            <td>{{ $c->start_at }}</td>
                            <td>{{ $c->end_at_at }}</td>
                            <td>{{ $c->code }}</td>
                            <td>{{ $c->type }}</td>
                            <td>{{ $c->value }}</td>
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
<div class="modal fade" id="couponModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Ajouter un coupon</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
        <form action="{{ route('coupon.store') }}" method="POST">
            <div class="modal-body">
                    @csrf
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="start_at" class="form-label">Date de début</label>
                            <input type="date" class="form-control" name="start_at">
                        </div>
                        <div class="col mb-0">
                            <label for="end_at" class="form-label">Date de fin</label>
                            <input type="date" class="form-control" name="end_at_at">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="code" class="form-label">Code</label>
                            <input type="text" class="form-control" name="code">
                        </div>
                        <div class="col mb-0">
                            <label for="type" class="form-label">Type</label>
                            <select name="type" id="type" class=" form-control select">
                                <option selected value="percent">Pourcentage</option>
                                <option value="fixed">Montant</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="value" class="form-label">Valeur du coupon</label>
                            <input type="number" class="form-control" name="value" placeholder="Entrez la valeur du coupon. Ex: 15% ou 5€">
                        </div>
                        <div class="col mb-0">
                            <label for="status" class="form-label">Statut</label>
                            <select name="status" id="status" class=" form-control select">
                                <option value="active">Actif</option>
                                <option value="inactive">Inactif</option>
                                <option value="cancelled">Annulé</option>
                            </select>
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
