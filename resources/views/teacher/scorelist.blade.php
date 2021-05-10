@extends('layouts.app')
@section('content')

    @include('inc.navbar')
    
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="col-md-12">
                    <h3>3R4-FL-Mandarin</h3>
                </div>
                
            </div>
            <div class="col-md-9 border-left">
                
                <div class="container-fluid">
                        <h2>Closed Quizzes> FL-Manadarin4</h2>
                        <hr>
                    
                        <div class="row">
                            <div class="col-sm-6 text-center ">
                                    <button class="btn font-weight-bold">Quiz</button>
                            </div>
                            <div class="col-sm-6 text-center ">
                                <button class="btn font-weight-bold">Response</button>
                            </div>
                        </div>
                    <div class="container">
                        <div class="container-scroll" id="style-1">
                            <table class="table">
                                <thead class="thead bg-dark-green text-light">
                                  <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Score(15)</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                  </tr>
                                </tbody>
                            </table>

                            {{-- <div class="container p-3 ml-4">   
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
                            </div> --}}
                        </div >
                    </div>
                   
                </div>
            </div>
    </div>
@endsection
