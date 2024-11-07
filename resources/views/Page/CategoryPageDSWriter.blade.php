@extends('.\Layout.master')
@section('title', 'Data Science Writer')

@section("Content")
    <div class="row px-5">
        <div class='col-2'>
            <img src="{{asset('assets/Kevin Petersen.png')}}" alt="Kevin Petersen Image" style="width:40%; border-radius:50%">
        </div>
        <div col='col-8'>
            <p style="font-weight:bold">{{$DataScienceCategory->writer}}</p>
            <h4>Spesialis Data Science</h4>
        </div>
    </div>

    @foreach ($DataScienceCategory->courses as $course)
        @if( $course->title == 'Machine Learning')
            <div class="row">
                <div class="col-4 text-center" style="padding: 25px">
                    <img src="{{ asset($course->ImagePath) }}" alt="{{ $course->title }}" style="width:80%; border-radius:10px">
                </div>
                <div class="col-8" style="padding: 25px">
                    <h2>{{ $course->title }}</h2>
                    <p>{{ $course->created_at->format('d M Y') }} | by: {{ $DataScienceCategory->writer }}</p>
                    <p>{{ $course->teaser }}</p>
                    <div class="d-flex justify-content-end">
                    <button class="btn-btn-dark rounded-pill px-4 py-2 bg-dark text-white" style= "width:250px" onclick="window.location.href='/EduFun/Category/DataScience/MachineLearning'">
                        read more.....
                    </button>
                    </div>
                </div>
            </div>
        @elseif($course->title == 'Deep Learning')
            <div class="row">
                <div class="col-4 text-center" style="padding: 25px">
                    <img src="{{ asset($course->ImagePath) }}" alt="{{ $course->title }}" style="width:80%; border-radius:10px">
                </div>
                <div class="col-8" style="padding: 25px">
                    <h2>{{ $course->title }}</h2>
                    <p>{{ $course->created_at->format('d M Y') }} | by: {{ $DataScienceCategory->writer }}</p>
                    <p>{{ $course->teaser }}</p>
                    <div class="d-flex justify-content-end">
                    <button class="btn-btn-dark rounded-pill px-4 py-2 bg-dark text-white" style= "width:250px" onclick="window.location.href='/EduFun/Category/DataScience/DeepLearning'">
                        read more.....
                    </button>
                    </div>
                </div>
            </div>
        @elseif($course->title == 'Natural Language Processing')
            <div class="row">
                <div class="col-4 text-center" style="padding: 25px">
                    <img src="{{ asset($course->ImagePath) }}" alt="{{ $course->title }}" style="width:80%; border-radius:10px">
                </div>
                <div class="col-8" style="padding: 25px">
                    <h2>{{ $course->title }}</h2>
                    <p>{{ $course->created_at->format('d M Y') }} | by: {{ $DataScienceCategory->writer }}</p>
                    <p>{{ $course->teaser }}</p>
                    <div class="d-flex justify-content-end">
                    <button class="btn-btn-dark rounded-pill px-4 py-2 bg-dark text-white" style= "width:250px" onclick="window.location.href='/EduFun/Category/DataScience/NaturalLanguageProcessing'">
                        read more.....
                    </button>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection