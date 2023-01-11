@extends('layouts.app')

@section('content')
<div class="contrainer my-3">
  <div class="row">
    <div class="col-8 offset-2">
      <div class="card">
        <div class="card-header">
          My Camps
        </div>
        <div class="card-body">
          @include('components.alert')
          <table class="table">
            <thead>
              <tr>
                <th>User</th>
                <th>Camp</th>
                <th>Price</th>
                <th>Register Date</th>
                <th>Paid Status</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($checkouts as $checkout)
              <tr>
                <td>{{ $checkout->User->name }}</td>
                <td>{{ $checkout->Camp->title }}</td>
                <td>{{ $checkout->Camp->price }}</td>
                <td>{{ $checkout->created_at->format('M d Y') }}</td>
                <td> <strong class="text-capitalize"> {{ $checkout->payment_status }} </strong></td>
                {{-- <td>
                  @if (!$checkout->is_paid)
                  <form action="{{ route('admin.checkout.update', $checkout->id) }}" method="post">
                    @csrf
                    <button class="btn btn-primary  btn-sm">Set to Paid</button>
                  </form>
                  @else

                  @endif

                </td> --}}
              </tr>
              @empty
              <h1>No Data</h1>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
