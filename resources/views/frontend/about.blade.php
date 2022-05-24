@extends('frontend.layouts.master')
@section('content')
    @foreach($abouts as $about)
    <div class="wrapper">
        <div class="content">
    <!-- About Start -->
    <div class="container bg-white pt-5">
        <div class="row px-3 pb-5">
            <div class="col-md-12">
                <h2 class="mb-4 font-weight-bold">{{$about->title}}</h2>

                <p class="m-0">
                    {{$about->about}}
                </p>
            </div>
            <div class="col-md-12 pt-4">
                <div class="d-flex flex-column skills">
                    <div class="progress w-100 mb-4">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">Adaptability</div>
                    </div>
                    <div class="progress w-100 mb-4">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">Research</div>
                    </div>
                    <div class="progress w-100">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Editing</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    </div>
    </div>
    @endforeach
@endsection
