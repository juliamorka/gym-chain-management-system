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
                <th class="col-md-6">Name</th>
                <th class="col-md-6">Count</th>
              </tr>
            </thead>
            <tbody class="card-body"> 
              @foreach($stock as $stock_item) 
              <div class="container">
                <tr style="text-align: center">
                  <td>{{$stock_item->item}}</td>
                  <td>{{$stock_item->count}}</td>
                </tr>
              </div> 
              @endforeach 
            </tbody>
          </table>
          </div>
        </div>
        </div>
      </div>
     @endif
    </div>
  </div>
</div> 
@endsection
