@extends('dashboard::layouts.master')

@section('title', 'Tous les avis produits')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
              <div class="card">
                <h5 class="card-header">Avis produits</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Client</th>
                        <th>Note</th>
                        <th>Avis</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($reviews as $r)
                        <tr>
                            <td>{{ $r->create_at }}</td>
                            <td>{{ $r->customer->name }}</td>
                            <td>{{ $r->rate }}</td>
                            <td>{{ $r->review }}</td>
                            <td><span class="badge {{ $r->status == 'active' ? 'bg-label-primary' : 'bg-label-warning' }} me-1">{{ $r->status == 'active' ? 'Actif' : 'Bloqué' }}</span></td>
                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
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
