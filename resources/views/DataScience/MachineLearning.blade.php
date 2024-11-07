@extends('.\Layout.master')
@section('title', 'Machine Learning')

@section('Content')
    <h2 class="px-4">{{ $DataScienceCategory->name }}</h2>

    <div class="container-fluid" style="padding: 25px">
        @foreach ($DataScienceCategory->courses as $course)
            @if ($course->title == 'Machine Learning')
                <div style="text-align:center">
                    <img src="{{ asset($course->ImagePath) }}" alt="Machine Learning Image" style="width:90%; border-radius:15px">
                </div>
                
                <div class='row'>
                    <div class='col-1'>
                    </div>

                    <div class='col-10'>
                        <p> {{$course->created_at->format('d M Y')}} | by: {{$DataScienceCategory->writer}}</p>
                        <p>{{ $course->summaries }}</p>
                    </div>

                    <div class='col-1'>
                    </div>
                </div>

                
            @endif
        @endforeach
    </div>
@endsection