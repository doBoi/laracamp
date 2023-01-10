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
          <div class="row">
            <div class="col-md-12 d-flex flex-row-reverse">
              <a href="{{ route('admin.discount.create') }}" class="btn btn-primary"> Add Discount
              </a>
            </div>
          </div>
          @include('components.alert')
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
