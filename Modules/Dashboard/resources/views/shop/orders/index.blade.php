@extends('dashboard::layouts.master')

@section('title', 'Toutes les commandes')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout -->
              <div class="card">
                <h5 class="card-header">Expéditions</h5>
                <button
                  type="button"
                  class="btn btn-primary"
                  data-bs-toggle="modal"
                  data-bs-target="#ordersModal"
                >
                  Ajouter +
                </button>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Référence</th>
                        <th>Client</th>
                        <th>Frais d'expédition</th>
                        <th>Coupon</th>
                        <th>Quantité</th>
                        <th>Moyen de paiement</th>
                        <th>Total</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($orders as $o)
                        <tr>
                            <td>{{ $o->reference }}</td>
                            <td>{{ $o->customer->name ?? $o->name }}</td>
                            <td>{{ $o->shipping ?? '/' }}</td>
                            <td>{{ $o->coupon->value ?? 'Aucun' }}</td>
                            <td>{{ $o->quantity }}</td>
                            <td>{{ $o->payment_method }}</td>
                            <td>{{ $o->total_amount }}</td>
                            <td><span class="badge {{ $o->status == 'active' ? 'bg-label-primary' : 'bg-label-warning' }} me-1">{{ $o->status == 'active' ? 'Active' : 'Annulée' }}</span></td>
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
@endsection
