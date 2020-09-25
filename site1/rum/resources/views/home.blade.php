@extends('layouts.app')
@section('content')

    <div class="main-content">
        <div class="container-fluid">
            {{-- Overview top page --}}
            @include('components.home.overview')

            <div class="row">
                {{-- line chart --}}
                @include('components.home.line_chart')

                {{-- donut chart --}}
                {{-- @include('components.home.circle_chart') --}}
                
            </div>
            <div class="row">
                @include('components.home.project_effort')
                @include('components.home.project_statistic')
            </div>
            <div class="row">
                @include('components.home.effort_usage')
            </div>
            
        </div>
    </div>

@endsection


