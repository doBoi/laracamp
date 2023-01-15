@extends('layouts.app')

@section('content')
<div class="contrainer my-3">
  <div class="row">
    <div class="col-8 offset-2">
      <div class="card">
        <div class="card-header">
          Discount
        </div>
        <div class="card-body">
          @include('components.alert')
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Code</th>
                <th>Percentage</th>
                <th>Description</th>
                <th colspan="2" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ( $discounts as $discount )
              <tr class="align-middle mt-2">
                <td>
                  <strong>{{ $discount->name}}</strong>
                </td>
                <td>
                  <strong>{{ $discount->code }}</strong>
                </td>
                <td>
                  <strong>{{ $discount->percentage }}% </strong>
                </td>
                <td>
                  @if ($discount->description)
                  <p>{{ $discount->description }}</p>
                  @else
                  <strong> -- </strong>
                  @endif
                </td>
                <td>
                  <a href="{{ route('admin.discount.edit', $discount->id) }}" class="btn btn-warning">Update</a>
                </td>
                <td>
                  <form action="{{ route('admin.discount.destroy', $discount->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                  </form>
                </td>
                @empty
                <div class="d-flex justify-content-center ">
                  <td colspan="6">No Data</td>
                </div>
                @endforelse
            </tbody>
          </table>
          <div class="row">
            <div class="col-md-12 d-flex flex-row-reverse">
              <a href="{{ route('admin.discount.create') }}" class="btn btn-primary"> Add Discount
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
