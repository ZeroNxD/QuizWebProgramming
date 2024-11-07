@extends('.\Layout.master')
@section('title', 'Network Security')

@section("Content")
    <h2 class="px-4">{{ $NetworkSecurityCategory->name }}</h2>

    @foreach ($NetworkSecurityCategory->courses as $course)
        @if( $course->title == 'Software Security')
            <div class="row">
                <div class="col-4 text-center" style="padding: 25px">
                    <img src="{{ asset($course->ImagePath) }}" alt="{{ $course->title }}" style="width:80%; border-radius:10px">
                </div>
                <div class="col-8" style="padding: 25px">
                    <h2>{{ $course->title }}</h2>
                    <p>{{ $course->created_at->format('d M Y') }} | by: {{ $NetworkSecurityCategory->writer }}</p>
                    <p>{{ $course->teaser }}</p>
                    <div class="d-flex justify-content-end">
                    <button class="btn-btn-dark rounded-pill px-4 py-2 bg-dark text-white" style= "width:250px" onclick="window.location.href='/EduFun/Category/NetworkSecurity/SoftwareSecurity'">
                        read more.....
                    </button>
                    </div>
                </div>
            </div>
        @elseif($course->title == 'Network Administration')
            <div class="row">
                <div class="col-4 text-center" style="padding: 25px">
                    <img src="{{ asset($course->ImagePath) }}" alt="{{ $course->title }}" style="width:80%; border-radius:10px">
                </div>
                <div class="col-8" style="padding: 25px">
                    <h2>{{ $course->title }}</h2>
                    <p>{{ $course->created_at->format('d M Y') }} | by: {{ $NetworkSecurityCategory->writer }}</p>
                    <p>{{ $course->teaser }}</p>
                    <div class="d-flex justify-content-end">
                    <button class="btn-btn-dark rounded-pill px-4 py-2 bg-dark text-white" style= "width:250px" onclick="window.location.href='/EduFun/Category/NetworkSecurity/NetworkAdministration'">
                        read more.....
                    </button>
                    </div>
                </div>
            </div>
        @elseif($course->title == 'Popular Network Technology')
            <div class="row">
                <div class="col-4 text-center" style="padding: 25px">
                    <img src="{{ asset($course->ImagePath) }}" alt="{{ $course->title }}" style="width:80%; border-radius:10px">
                </div>
                <div class="col-8" style="padding: 25px">
                    <h2>{{ $course->title }}</h2>
                    <p>{{ $course->created_at->format('d M Y') }} | by: {{ $NetworkSecurityCategory->writer }}</p>
                    <p>{{ $course->teaser }}</p>
                    <div class="d-flex justify-content-end">
                    <button class="btn-btn-dark rounded-pill px-4 py-2 bg-dark text-white" style= "width:250px" onclick="window.location.href='/EduFun/Category/NetworkSecurity/PopularNetworkTechnology'">
                        read more.....
                    </button>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection