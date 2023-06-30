@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }} <br><br>
                    <h3>Products</h3>
                    <div class="grid-container">
                        @foreach ($product as $pro)
                            <div>
                                <h4>{{ $pro->name }}</h4>
                                <p>{{ $pro->description }}</p>
                                <span>$ {{ $pro->price }}</span>
                                    <td>
                                        <a href="{{route('goToPayment', [$pro->id, $pro->price])}}">
                                            <button>Buy now</button>
                                        </a>
                                    </td>
                                </tr>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid black;
  text-align: center;
  font-size: 30px;
}
</style>
@endsection