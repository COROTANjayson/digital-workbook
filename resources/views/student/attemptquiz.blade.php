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
                            <p><span class="font-weight-bold">Note: </span> Read Instructions carefully</p>
                            <p><span class="font-weight-bold">Time Limit: </span> 20 minutes</p>
                            <p><span class="font-weight-bold">Items: </span> 15</p>
                            <p><span class="font-weight-bold">Attempts Allowed: </span> 1</p>
                            <p><span class="font-weight-bold">Due Date: </span> April 08, 2021, Thursday, 11: 59 pm</p>
                        </div>
                        
                        <form action="/answerquiz">
                            <div class="container my-3 text-center">
                                <button type="submit" class="button-quiz text-light">Answer Quiz</button>   
                            </div >
                        </form>
                        
                        <div class="container text-center">
                            <a href="/quizlist" type="button" class=" button-quiz text-light">Cancel</a>
                        </div>
                </div>    
                
            </div>
        </div>
    </div>

@endsection