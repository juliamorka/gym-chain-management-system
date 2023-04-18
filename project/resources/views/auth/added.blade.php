@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('New employee added successfully!') }}</div>

                    <div class="card-body">
                        {{ __('You have added new employee!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
