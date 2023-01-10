@extends('layouts.app')

@section('content')
<div class="contrainer my-3">
  <div class="row">
    <div class="col-8 offset-2">
      <div class="card">
        <div class="card-header">
          Insert a New Discount
        </div>
        <div class="card-body">
          <form action="{{ route('admin.discount.store') }}" method="post">
            @csrf
            <div class="form-group mb-4">
              <label class="form-label " for="">Name</label>
              <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="form-group mb-4">
              <label class="form-label " for="">Code</label>
              <input type="text" name="code" id="" class="form-control">
            </div>
            <div class="form-group mb-4">
              <label class="form-label " for="">Description</label>
              <textarea name="description" class="form-control " id="" cols="0" rows="2"></textarea>
            </div>
            <div class="form-group mb-4">
              <label class="form-label " for="">Discount percentage</label>
              <input type="number" name="percentage" id="" class="form-control" min="1" max='100'>
            </div>
            <div class="form-group mb-4">
              <button class="btn btn-primary" type="submit"> Submit</button>
            </div>
          </form>
        </div>
        @include('components.alert')
      </div>
    </div>
  </div>
</div>
</div>
@endsection
