@extends('.\Layout.master')
@section('title', 'HomePage')

@section("Content")
    <div class = "container-fluid" style="padding: 0;">
        <img src="{{ asset('assets/HomePage_Image.png')}}" style="width: 100%; object-fit: cover;">
    </div>


    <div class="row">
        <div class="col-4 text-center" style="padding: 25px">
            <!-- Show Image -->
            @if($DataScienceCategory && $DataScienceCategory->courses->isNotEmpty())
            <img src="{{ asset($DataScienceCategory->courses->first()->ImagePath) }}" alt="{{ $DataScienceCategory->courses->first()->title }}" 
            style="width:80%; border-radius:10px">
            @endif
        </div>

        <div class="col-8" style="padding: 25px">
            <!-- Show Content like Title, Time Created, Summary/Teaser -->
            @if($DataScienceCategory && $DataScienceCategory->courses->isNotEmpty())
                <h2>{{$DataScienceCategory->courses->first()->title}}</h2>
                <p> {{ $DataScienceCategory->courses->first()->created_at->format('d M Y')}} | by: {{$DataScienceCategory->writer}}</p>
                <p> {{ $DataScienceCategory->courses->first()->teaser}}</p>
                <div class="d-flex justify-content-end">
                    <button class="btn-btn-dark rounded-pill px-4 py-2 bg-dark text-white" style= "width:250px" onclick="window.location.href='/EduFun/Category/DataScience/MachineLearning'">
                        read more.....
                    </button>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-4 text-center" style="padding: 25px">
            <!-- Show Image -->
            @if($NetworkSecurityCategory && $NetworkSecurityCategory->courses->isNotEmpty())
                <img src="{{ asset($NetworkSecurityCategory->courses->first()->ImagePath) }}" alt="{{ $NetworkSecurityCategory->courses->first()->title }}"
                style="width:80%; border-radius:10px">
            @endif
        </div>

        <div class="col-8" style="padding: 25px">
            <!-- Show Content like Title, Time Created, Summary/Teaser -->
            @if($NetworkSecurityCategory && $NetworkSecurityCategory->courses->isNotEmpty())
                <h2>{{ $NetworkSecurityCategory->courses->first()->title}}</h2>
                <p> {{ $NetworkSecurityCategory->courses->first()->created_at->format('d M Y')}} | by: {{$NetworkSecurityCategory->writer}}</p>
                <p> {{ $NetworkSecurityCategory->courses->first()->teaser}}</p>
                <div class="d-flex justify-content-end">
                    <button class="btn-btn-dark rounded-pill px-4 py-2 bg-dark text-white" style= "width:250px" onclick="window.location.href='/EduFun/Category/NetworkSecurity/SoftwareSecurity'">
                        read more.....
                    </button>
                </div>
            @endif
        </div>
    </div>
@endsection
