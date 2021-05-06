@extends('layouts.app')
@section('content')

    @include('inc.navbar')
    
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="col-md-12">
                    <h3>Foreign Language</h3>
                    <div class="container m-3 text-center">
                        <div class="container-fluid bg-dark-green text-light"><h4 class="">Quiz-FL-4</h4></div>
                        <h6 class="">Time Remaining</h6>
                        <h2 class="font-weight-bold">0:03</h2>
                    </div>
                </div>
                
            </div>
            <div class="col-md-9 border-left">
                <div class="container-scroll" id="style-1">
                    <div class="container-fluid">
                        <h1>FL-Quiz-4</h1>
                        <div class="container p-3 ml-4">   
                            <ul class="list-inline">
                                    <li class="list-inline-item">1. Question?</li>
                                    <li class="list-inline-item text-secondary ml-8">2 points</li>
                            </ul>

                            <div class="container">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Option 1</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Option 2</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">Option 3</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio4">Option 4</label>
                                </div> 
                            </div>   
                        </div>
                        
                        <div class="text-right">
                            <form action="/finishquiz">
                                <button type="submit" class="button-quiz text-capitalize">Submit</button>
                            </form>
                        </div>
                        
                    </div>
                </div>    
                
            </div>
        </div>
    </div>

@endsection