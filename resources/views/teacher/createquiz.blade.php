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
                    <div class="">
                        <h1>FL-Quiz-4</h1>
                        <div class="container my-4">
                            <div class="container">
                                <form id="question-form" action="" method="GET">
                                    <div id="container-form">
                                        <input type="text" name="questionTitle" placeholder="Question Title" class="form-control" />
                                        <div class="text-right py-2">
                                            <button type="button" class="btn btn-success" id="addQuestion">Add Question</button>
                                        </div>
                                        <div class="question-box container bg-white p-3 my-3 border border-secondary rounded" id="questionBox">
                                            
                                            <div class="text-right" id="times">
                                                <a class="fa fa-times text-secondary text-decoration-none delete-question" role="button" id=""></a>
                                            </div>
                                            
                                            <label for="question" class="form-label">Question: </label>
                                            <input type="text" name="question" placeholder="Enter Question" class="form-control" />
                                            
                                            <div class="form-group row m-3" id="containerPoints">
                                                <label for="points" class="col-sm-1 col-form-label">Points:</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control w-25" id="points" value="1" name="points" min="1">
                                                </div>
                                            </div>
                                            <div class=" container text-center py-3" id="option-container">
                                                <h6 class="text-left">Select for correct answer</h6>
                                                <table class="table my-2 table-borderless" >
                                                    
                                                    <tbody id="table-option">
                                                      <tr>
                                                        <td class="align-middle"><input type="checkbox" name="answer" value="option1" checked></td>
                                                        <td class="align-middle"><input type="text" name="option1" id="option1" placeholder="Option 1" class="form-control" /></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="align-middle"><input type="checkbox" name="answer" value="option2"></td>
                                                        <td class="align-middle"><input type="text" name="option2" id="option2" placeholder="Option 2" class="form-control" /></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="align-middle"><input type="checkbox" name="answer" value="option3"></td>
                                                        <td class="align-middle"><input type="text" name="option3" id="option3" placeholder="Option 3" class="form-control" /></td>
                                                      </tr>
                                                      <tr>
                                                        <td class="align-middle"><input type="checkbox" name="answer" value="option4"></td>
                                                        <td class="align-middle"><input type="text" name="option4" id="option4" placeholder="Option 4" class="form-control" /></td>
                                                      </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                                
                                            
                                        </div>
                                    </div>
                                    <div class="row my-5">
                                        <div class="col-md-6">        
                                            <button type="submit" class="button-quiz text-capitalize">Save</button>  
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <form action="/created">
                                                <button type="submit" class="button-quiz text-capitalize">Create</button>
                                            </form>
                                        </div>
                                        
                                    </div>
                                    
                                </form> 
                            </div>  
                        </div>
                    </div>
                </div>    
                
            </div>
        </div>
    </div>
    <script src="{{ asset('js/createquiz.js') }}" defer></script>
@endsection