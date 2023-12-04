@extends('dashboard::layouts.master')

@section('title', 'Toutes les produits')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
              <div class="card">
                <h5 class="card-header">Produits</h5>
                <a href="{{ route('product.create') }}"
                  class="btn btn-primary"
                >
                  Ajouter +
                </a>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Catégorie</th>
                        <th>Photo</th>
                        <th>Quantité</th>
                        <th>Size</th>
                        <th>Condition</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($products as $p)
                        <tr>
                            <td>{{ $p->title }}</td>
                            <td>{!! $p->summary !!}</td>
                            <td>{{ $p->category->title ?? '/' }}</td>
                            <td>/</td>
                            <td>{{ $p->stock }}</td>
                            <td>{{ $p->size }}</td>
                            <td>{{ $p->condition }}</td>
                            <td><span class="badge {{ $p->status == 'active' ? 'bg-label-primary' : 'bg-label-warning' }} me-1">{{ $p->status == 'active' ? 'Actif' : 'Inactif' }}</span></td>
                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('product.edit', $p->id) }}"
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
@endsection
