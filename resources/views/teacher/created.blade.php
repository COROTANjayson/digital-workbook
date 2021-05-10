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
                        
                        
                        <div class="col-md-9 mx-auto">
                            <form>
                                <div class="form-group row">
                                    <label for="note" class="col-sm-3 col-form-label">Note: </label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="note">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="items" class="col-sm-3 col-form-label">Items: </label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="items" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">Time Limit</label>
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
                                <div class="form-group row">
                                    <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label">Attempts Allowed</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="exampleFormControlSelect2">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" >
                                    <label for="available-on " class="col-sm-3 col-form-label ">Available on: </label>
                                    <div class="col-sm-9 ">
                                        <div class='input-group' id='datetimepicker1'>
                                            <input type="text" name="AvOn" data-field="datetime" class="date form-control" {{-- id="availableOn" --}} readonly placeholder="DD/MM/YYYY" />
                                            <div id="availableOn"></div>
                                            <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="available-until" class="col-sm-3 col-form-label">Available until: </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="AvUntil" data-field="datetime" class="date form-control" id="avUntil" readonly placeholder="DD/MM/YYYY" />
                                        <div id="availableUntil"></div>
                                        <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mx-auto">
                                    <div class="mt-2 mw-100">
                                        <button type="submit" class="btn btn-block button-dark-green">Set Quiz code and Post</button>
                                    </div>
                                    <div class="form-group row">
                                        <input type="text" class="form-control" id="items" placeholder="Enter Code">
                                    </div>
                                </div>
                               {{--  <input type="text" data-field="datetime" readonly> --}}
                                                            
                              </form>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <script src="{{ asset('js/datetimepicker.js') }}" defer></script>
@endsection

