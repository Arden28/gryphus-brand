@extends('dashboard::layouts.master')

@section('title', 'Tous les articles de blog')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
              <div class="card">
                <h5 class="card-header">Articles</h5>
                <a href="{{ route('post.create') }}"
                  class="btn btn-primary"
                >
                  Ajouter +
                </a>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Titre</th>
                        <th>Catégorie</th>
                        <th>Etiquette(s)</th>
                        <th>Auteur</th>
                        <th>Photo</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($posts as $p)
                        <tr>
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->category->title ?? '/' }}</td>
                            <td>
                                {{ $p->tags }}
                            </td>
                            <td>{{ $p->author->name }}</td>
                            <td>/</td>
                            <td><span class="badge {{ $p->status == 'active' ? 'bg-label-primary' : 'bg-label-warning' }} me-1">{{ $p->status == 'active' ? 'Actif' : 'Inactif' }}</span></td>
                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('post.edit', $p->id) }}"
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
