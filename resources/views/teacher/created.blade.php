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
                <div class="container-scroll" id="style-1">
                    <div class="container-fluid">
                        <h1>Created Quiz</h1>
                        <button type="submit" class="button-quiz text-capitalize">Save</button>
                        
                        <div class="col-md-9 mx-auto">
                            <form>
                                <div class="form-group row">
                                    <label for="note" class="col-sm-3 col-form-label text-right">Note: </label>
                                    <div class="col-sm-9">
                                      <input type="password" class="form-control" id="note">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="items" class="col-sm-3 col-form-label text-right">Items: </label>
                                    <div class="col-sm-9">
                                      <input type="password" class="form-control" id="items" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label text-right">Time Limit</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                              </form>
                        </div>
                        
                    </div>
                </div>    
                
            </div>
        </div>
    </div>

@endsection