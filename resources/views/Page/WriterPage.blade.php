@extends('.\Layout.master')
@section('title', 'Writer Page')

@section("Content")
    <h2 class="px-4 py-2">Our Writers</h2>

    <div class="row" style="text-align:center; padding:10px">
        <div class="col-6" style="padding: 25px">
            <img src="{{asset('assets/Kevin Petersen.png')}}" alt="Kevin Petersen Image" style="width:40%; border-radius:50%" onclick="window.location.href='/EduFun/Writer/DataScience'">
            <p style="padding:10px; font-weight:bold">{{$DataScienceCategory->writer}}</p>
            <h4>Spesialis Data Science</h4>
        </div>

        <div class="col-6" style="padding: 25px">
            <img src="{{asset('assets/Komi Shouko.jpg')}}" alt="Tes" style="width:40%; border-radius:50%" onclick="window.location.href='/EduFun/Writer/NetworkSecurity'">
            <p style="padding:10px; font-weight:bold">{{$NetworkSecurityCategory->writer}}</p>
            <h4>Spesialis Network Security</h4>
        </div>
    </div>

    
@endsection