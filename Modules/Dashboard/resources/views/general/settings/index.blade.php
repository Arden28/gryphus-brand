@extends('dashboard::layouts.master')

@section('title', 'Paramètres')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Paramètres Généraux /</span> Paramètres</h4>

  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-md-row mb-3">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Paramètres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"
            ><i class="bx bx-bell me-1"></i> Notifications</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"
            ><i class="bx bx-link-alt me-1"></i> Connections</a
          >
        </li>
      </ul>
      <div class="card mb-4">
        <h5 class="card-header">Paramètres Généraux</h5>
        <!-- Account -->
        <div class="card-body">
          <div class="d-flex align-items-start align-items-sm-center gap-4">
            <img
              src="{{ asset('assets/images/logo-icon.png')}}"
              alt="user-avatar"
              class="d-block rounded"
              height="65"
              width="65"
              id="uploadedAvatar"
            />
            <div class="button-wrapper">
              <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Chargez une nouvelle photo</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input
                  type="file"
                  id="upload"
                  class="account-file-input"
                  hidden
                  accept="image/png, image/jpeg"
                />
              </label>
              <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                <i class="bx bx-reset d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Reset</span>
              </button>

              <p class="text-muted mb-0">Autorisée JPG, GIF or PNG. Taille max de 800Ko</p>
            </div>
          </div>
        </div>
        <hr class="my-0" />
        <div class="card-body">
          <form id="formAccountSettings" method="POST" action="{{ route('settings.update', $setting->id) }}">
            @csrf
            @method('patch')
            <div class="row">

              <div class="mb-3 col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input
                  class="form-control"
                  type="text"
                  id="email"
                  name="email"
                  value="{{ $setting->email }}"
                  placeholder="john.doe@example.com"
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="organization" class="form-label">Télépone</label>
                <input
                  type="text"
                  class="form-control"
                  id="organization"
                  name="phone"
                  value="{{ $setting->phone }}"
                />
              </div>
              <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Adresse" value="{{ $setting->address }}" />
              </div>
              <div class="mb-3 col-md-6">
                <label for="language" class="form-label">Langue</label>
                <select id="language" class="select2 form-select">
                  <option value="">Selectionnez une langue</option>
                  <option selected value="fr">Français</option>
                </select>
              </div>

              <div class="mb-3 col-md-6">
                <label for="currency" class="form-label">Devise</label>
                <select id="currency" class="select2 form-select">
                  <option value="">Selectionnez votre devise</option>
                  <option selected value="euro">Euro</option>
                </select>
              </div>

              <div class="mb-3 col-md-12">
                <label for="short_des" class="form-label">Courte description</label>
                <textarea name="short_des" id="short_des" cols="30" rows="10" class="form-control">
                    {!! $setting->short_des !!}
                </textarea>
              </div>

              <div class="mb-3 col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">
                    {!! $setting->description !!}
                </textarea>
              </div>

            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">Sauvegarder</button>
              <button type="reset" class="btn btn-outline-secondary">Annuler</button>
            </div>
          </form>
        </div>
        <!-- /Account -->
      </div>

      {{-- <div class="card">
        <h5 class="card-header">Delete Account</h5>
        <div class="card-body">
          <div class="mb-3 col-12 mb-0">
            <div class="alert alert-warning">
              <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
              <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
            </div>
          </div>
          <form id="formAccountDeactivation" onsubmit="return false">
            <div class="form-check mb-3">
              <input
                class="form-check-input"
                type="checkbox"
                name="accountActivation"
                id="accountActivation"
              />
              <label class="form-check-label" for="accountActivation"
                >I confirm my account deactivation</label
              >
            </div>
            <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
          </form>
        </div>
      </div> --}}

    </div>
  </div>
</div>
@endsection
