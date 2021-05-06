@extends('layouts.app')
@section('content')
   
    @include('inc.navbar')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="col-md-12">
                    <h3>Foreign Language</h3>
                    <div class="container bg-light-green m-3">
                        <h6 class="text-center">Course Description</h6>
                        <p>This is Foreign Language</p>
                    </div>
                </div>
                
            </div>
            <div class="col-md-9 border-left ">
                <div class="container-scroll" id="style-1">
                    <h1>FL-Quiz-4</h1>
                        <div class="w-50 mx-auto">
                            <p><span class="font-weight-bold">Submitted: </span> 08/04/21, 7:00 am</p>
                            <p><span class="font-weight-bold">Time Taken: </span> 17minutes</p>
                            
                        </div>
                        
                        <form action="/viewscore">
                            <div class="container my-3 text-center">
                                <button type="submit" class="button-quiz text-light">View Score</button>   
                            </div >
                        </form>
                        
                        <div class="container text-center">
                            <a href="/quizlist" type="button" class=" button-quiz text-light">Done</a>
                        </div>
                </div>    
                
            </div>
        </div>
    </div>

@endsection