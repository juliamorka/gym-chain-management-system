@extends('layouts.app')

@section('content')
    <div class="container">
        <header class="py-3 mb-4 border-bottom">
            <div class="container d-flex flex-wrap justify-content-center">
                <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    <span class="fs-4">Details</span>
                </a>
            </div>
        </header>
    </div>
    @foreach($locations as $loc)
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" >
            <div class="flex font-sans" style="display:flex; align-items: center">
                <div class="flex-none w-48 relative" >
                    <img src="{{$loc->image}}" style="width: 300px; height:250px"/>
                </div>
                <div class="ml-4" style="padding-left:15px;/* display: inline; vertical-align: middle*/">
                    <h3 class="text-lg font-semibold text-slate-500">
                        Address: {{$loc->street}} {{$loc->street_no}}, {{$loc->city}}
                    </h3>
                    <h3 class="text-lg font-semibold text-slate-500">
                        Phone No: {{$loc->phone_no}}
                    </h3>
                </div>
            </div>
        </div>
        <br>
    @endforeach
@endsection
@section('body')

@endsection
