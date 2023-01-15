@extends('layouts.app')

@section('content')
<div class="contrainer my-3">
  <div class="row">
    <div class="col-8 offset-2">
      <div class="card">
        <div class="card-header">
          Update Discount: {{ $discount->name }}
        </div>
        <div class="card-body">
          <form action="{{ route('admin.discount.update', $discount->id)}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $discount->id }}">
            <div class="form-group mb-4">
              <label class="form-label " for="">Name</label>
              <input type="text" name='name' class="form-control {{ $errors->has(' name') ? 'is-invalid' : '' }}"
                value="{{ old('name') ?: $discount->name}}" required>
              @if ($errors->has('name'))
              <p class="text-danger">{{ $errors->first('name') }}</p>
              @endif
            </div>
            <div class="form-group mb-4">
              <label class="form-label " for="">Code</label>
              <input type="text" name='code' class="form-control {{ $errors->has('code') ? 'is-invalid' : ''}}"
                value="{{ old('code')?: $discount->code}}" required>
              @if ($errors->has('code'))
              <p class="text-danger">{{ $errors->first('code') }}</p>
              @endif
            </div>
            <div class="form-group mb-4">
              <label class="form-label " for="">Description</label>
              <textarea name="description" class="form-control " cols="0"
                rows="2">{{ old('description') ?: $discount->description}}</textarea>
            </div>
            <div class="form-group mb-4">
              <label class="form-label " for="">Discount percentage</label>
              <input type="number" name="percentage" class="form-control
              {{ $errors->has('percentage') ? 'is-invalid' : ''}}" min="1" max='200'
                value="{{ old('percentage') ?: $discount->percentage}}" required>
              @if ($errors->has('percentage'))
              <p class="text-danger">{{ $errors->first('percentage') }}</p>
              @endif
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
