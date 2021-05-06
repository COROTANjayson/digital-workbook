@extends('layouts.app')
@section('content')

    @include('inc.navbar')

    <div class="container text-left">
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
            <div class="col-md-9 border-left">
                <div class="container-scroll" id="style-1">
                    <h3 class=" pb-2">Ongoing Quizzes</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 my-3">
                                <button type="button" id="modal-btn" class="button-quiz text-light">FL-Quiz-4</button>
                            </div> 
                        </div>
                    </div>
                    <h3 class="py-2">Closed Quizzes</h3>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 my-3">
                                    <button type="button" class="button-quiz text-light">FL-Quiz-4</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="my-modal" class=" modal">
        <div class="modal-content text-center ">
            <div class="modal-header bg-light-green">
                <h2>Quiz Code</h2>
                <span class="close">&times;</span>
                
            </div>
            <div class="modal-body">
                <form action="/attemptquiz" >
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter Code">
                    </div>  
                    <button type="submit" class="button-quiz text-light">ENTER</button>
                </form>
               
            </div>
        
        </div>
    </div>
    <script src="{{ asset('js/popup.js') }}" defer></script>

@endsection