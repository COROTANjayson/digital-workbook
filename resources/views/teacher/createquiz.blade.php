@extends('layouts.app')
@section('content')

    @include('inc.navbar')
    
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="col-md-12">
                    <h3>3R4-FL-Mandarin</h3>
                    <div class="container bg-light-greenapple my-1 py-1 px-3">
                        <h5 class="font-weight-bold">Quiz option</h5>
                        <div class="my-3"> 
                            <h6>Release Remark</h6>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="remark1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="remark1">Immediately after Submission</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="remark2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="remark2">Later After Submission</label>
                                </div>
                        </div>
                        <div class="my-3"> 
                            <h6>Student can see</h6>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="correctAnswer">
                                <label class="custom-control-label" for="correctAnswer">Correct Answer</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="pointsValue">
                                <label class="custom-control-label" for="pointsValue">Points Value</label>
                            </div>
                        </div>
                        
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
                        <div class="row">
                            <div class="col-md-6">
                                    <form action="">
                                        <button type="submit" class="button-quiz text-capitalize">Save</button>
                                    </form>
                            </div>
                            <div class="col-md-6 text-right">
                                <form action="/created">
                                    <button type="submit" class="button-quiz text-capitalize">Create</button>
                                </form>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>    
                
            </div>
        </div>
    </div>

@endsection