@extends('layouts.app')

@section('content')
<section class="dashboard my-5">
  <div class="container">
    <div class="row text-left">
      <div class=" col-lg-12 col-12 header-wrap mt-4">
        <p class="story">
          DASHBOARD
        </p>
        <h2 class="primary-header ">
          My Bootcamps
        </h2>
      </div>
    </div>
    <hr>
    <div class="row my-5">
      @include('components.alert')
      <table class="table">
        <tbody>
          @forelse ( $checkouts as $checkout )
          <tr class="align-middle">
            <td width="18%">
              <img src="{{ asset('images/item_bootcamp.png') }}" height="120" alt="">
            </td>
            <td>
              <p class="mb-2">
                <strong>{{ $checkout->Camp->title }}</strong>
              </p>
              <p>
                {{ $checkout->created_at->format('M-d, Y') }}
              </p>
            </td>
            <td>
              <strong>Rp. {{ number_format($checkout->total,2) }}
                @if ($checkout->discount_id)
                <div class="badge bg-success">Disc {{ $checkout->discount_percentage }}%</div>
                @endif
              </strong>
            </td>
            <td>
              <strong>{{ $checkout->payment_status }} </strong>
            </td>
            @if ($checkout->payment_status == "waiting")
            <td>
              <a href="{{ $checkout->midtrans_url }}" target="_blank" class="btn btn-warning">
                Pay Here!
              </a>
            </td>
            @endif


            <td>
              <a href="https://wa.me/08979134310?text=hi, saya ingin bertanya tentang kelas {{ $checkout->Camp->title }} "
                class="btn btn-primary">
                Contact Support
              </a>
            </td>
          </tr>
          @empty
          <div class="d-flex justify-content-center ">
            <h1>No Data</h1>
          </div>
          @endforelse

        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection
