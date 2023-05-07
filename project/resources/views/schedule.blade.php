@extends('layouts.app')

@section('content')
    <div class="container">
        <header class="py-3 mb-4 border-bottom">
            <div class="container d-flex flex-wrap justify-content-center">
                <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    <span class="fs-4">Schedule</span>
                </a>
            </div>
        </header>
    </div>
    @if (Auth::user() and Auth::user()->role == "CEO")
        <?php $employees = \App\Models\User::all();?>
        @foreach($employees as $empl)
            @if ($empl->role != 'CEO')
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" >
                    <div class="flex font-sans" style="display:flex; align-items: center">
                        <div class="flex-none w-48 relative" >
                            <img src="{{$empl->profile_pic}}" style="width: 300px; height:250px"/>
                        </div>
                        <div class="ml-4" style="padding-left:15px;/* display: inline; vertical-align: middle*/">
                            <h3 class="text-lg font-semibold text-slate-500">
                                Name: {{$empl->name}}
                            </h3>
                            <h3 class="text-lg font-semibold text-slate-500">
                                Role: {{$empl->role}}
                            </h3>
                            <h3 class="text-lg font-semibold text-slate-500">
                                <?php $loc = \App\Models\Location::where('id', $empl->location_id)->first(); ?>
                                Location: {{$loc->street}} {{$loc->street_no}}, {{$loc->city}}
                            </h3>
                        </div>
                    </div>
                </div>
                <br>
            @endif
        @endforeach
    @endif
@endsection
