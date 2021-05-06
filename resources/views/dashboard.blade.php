@extends('layouts.app')

@section('content')

@include('inc.navbar')

<div class="container">
    <h1>Subjects</h1>
    <div class="container-fluid">
        <div class="container-scroll" id="style-1">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="col-md-12 text-center pt-2 bg-gray text-dark">
                        <a href="/quizlist"><img class="img-thumbnail" src="https://www.planetware.com/wpimages/2020/02/france-in-pictures-beautiful-places-to-photograph-eiffel-tower.jpg" alt=""></a>
                        <h5 class="mt-2">Foreign Language</h5>
                    </div>
                
                </div>
                <div class="col-md-4 ">
                    <div class="col-md-12 text-center pt-2 bg-gray text-dark">
                        <a href=""><img class="img-thumbnail" src="https://www.planetware.com/wpimages/2020/02/france-in-pictures-beautiful-places-to-photograph-eiffel-tower.jpg" alt=""></a>
                        <h5 class="mt-2">Foreign Language</h5>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="col-md-12 text-center pt-2 bg-gray text-dark">
                        <a href=""><img class="img-thumbnail" src="https://www.planetware.com/wpimages/2020/02/france-in-pictures-beautiful-places-to-photograph-eiffel-tower.jpg" alt=""></a>
                        <h5 class="mt-2">Foreign Language</h5>
                    </div>
                </div>
            </div>
            
        </div>                    
    </div>   
            {{-- For Looping --}}
    {{-- @foreach(array_chunk($address, 3) as $chunk)
        <div class="row">
            @foreach($chunk as $add)
                <div class="col-md-6">
                    Some data
                </div>
            @endforeach
        </div>
    @endforeach --}}
</div>

@endsection
