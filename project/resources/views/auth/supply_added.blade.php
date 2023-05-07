@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Supply added successfully!') }}</div>

                    <div class="card-body">
                        {{ __('You have added new supply!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
