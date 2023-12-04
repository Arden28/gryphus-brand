@extends('dashboard::layouts.master')

@section('title', 'Tous les utilisateurs')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
              <div class="card">
                <h5 class="card-header">Utilisateurs</h5>
                <button
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#usersModal"
                >
                  Ajouter +
                </button>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Photo</th>
                        <th>Nom Complet</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($users as $u)
                        <tr>
                            <td><img src="{{ asset('assets/images/logo-icon.png')}}" alt="{{ $u->name }}"></td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->role }}</td>
                            <td><span class="badge {{ $u->status == 'active' ? 'bg-label-primary' : 'bg-label-warning' }} me-1">Active</span></td>
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
<div class="modal fade" id="usersModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Ajouter un utilisateur</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
        <form action="{{ route('users.store') }}" method="POST">
            <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col mb-3">
                            <label for="name" class="form-label">Nom complet</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Ex: Evrad Makanda" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Adresse e-mail" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="phone" class="form-label">Téléphone</label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Numéro de téléphone, avec indicatif" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Adresse e-mail" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="photo" class="form-label">Profile</label>
                            <input type="file" id="photo" name="photo" class="form-control" placeholder="Image de la catégorie" />
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="role" class="form-label">Rôle </label>
                            <select name="role" id="role" class=" form-control select">
                                <option value="">Choisissez un rôle</option>
                                <option value="admin">Administrateur</option>
                                <option value="user">Utilisateur</option>
                                <option value="editor">Editeur</option>
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="status" class="form-label">Statut</label>
                            <select name="status" id="status" class=" form-control select">
                                <option value="active">Actif</option>
                                <option value="inactive">Inactif</option>
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
