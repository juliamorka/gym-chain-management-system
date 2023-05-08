@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
        @if (Auth::user() and Auth::user()->role == "CEO")
          <div class="card">
            <div class="card-header">{{ __('Items in warehouse') }}</div>
            <div class="card-body">
            <div class="card">
              <table class="col-md-16" style="table-layout: fixed">
                <thead class="card-header">
                  <tr style="text-align: center">
                    <th class="col-md-4">Name</th>
                    <th class="col-md-4">Count</th>
                    <th class="col-md-4">Branch ID</th>
                  </tr>
                </thead>
                <tbody class="card-body">
                  @foreach($stock as $stock_item)
                  <div class="container">
                    <tr style="text-align: center">
                      <td>{{$stock_item->item}}</td>
                      <td>{{$stock_item->count}}</td>
                      <td>{{$stock_item->location_id}}</td>
                    </tr>
                  </div>
                  @endforeach
                </tbody>
              </table>
              </div>
            </div>
            </div>
          </div>
        @elseif(Auth::user() and Auth::user()->role == "Warehouse worker")
          <div class="card">
              <div class="card-header">{{ __('Add supplies') }}</div>

              <div class="card-body">
                  <form method="POST" action="{{ route('supplies') }}" enctype="multipart/form-data">
                      @csrf

                      <div class="row mb-3">
                          <label for="item" class="col-md-4 col-form-label text-md-end">{{ __('Item') }}</label>

                          <div class="col-md-6">
                              <select id="item" name="item" class="form-control @error('item') is-invalid @enderror">
                                  <option disabled selected value> {{Request::get('item') ?? " -- select an option -- "}} </option>
                                  <option value="Treadmill" >Treadmill</option>
                                  <option value="Exercise ball" >Exercise ball</option>
                                  <option value="Weights" >Weights</option>
                              </select>

                              @error('item')
                              <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="quantity" min="0" class="col-md-4 col-form-label text-md-end">{{ __('Quantity') }}</label>

                          <div class="col-md-6">
                              <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}">

                              @error('quantity')
                              <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                          </div>
                      </div>
                      <div class="row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Submit') }}
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
        @endif
    </div>
  </div>
</div>
@endsection
