@extends('layouts.admin')
@section('sidebar')
    @parent
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content">							
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Add Category</h2>
                    </div>
                    <div class="card-body">
                        @php
                            $action = isset($category) ? route('category.update',$category->id) : route('category.store');
                        @endphp
                        <form action="{{$action}}" method="POST">
                            @if(isset($category))
                                <input name="_method" type="hidden" value="PUT">
                            @endif
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer01">Category</label>
                                    <input type="text" class="form-control" id="validationServer01" name="category" value="{{isset($category) ? $category->category : ''}}" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status" required>
                                        <option value="0" {{(isset($category) && $category->status == 0) ? "selected" : ""}}>Pedding</option>
                                        <option value="1" {{(isset($category) && $category->status == 1) ? "selected" : ""}}>Completed</option>
                                    </select>
                                </div>
                                {{-- <div class="col-md-12 mb-3">
                                    <select name="status" class="form-control" id="status" required>
                                        <option value="0" {{(isset($category) && $category->status == 0) ? "selected" : ""}}>Pedding</option>
                                        <option value="1" {{(isset($category) && $category->status == 1) ? "selected" : ""}}>Completed</option>
                                    </select>
                                </div> --}}
                                <div class="col-md-12 mb-3">
                                    @php
                                        $gender = isset($category) ? explode(',',$category->gender) : [];
                                        $checkMale = in_array('male',$gender) ? 'checked' : '';
                                        $checkFemale = in_array('female',$gender) ? 'checked' : '';

                                    @endphp
                                    <label for="">Gender</label>
                                    <label class="control control-checkbox">Male
                                        <input type="checkbox" name="gender[]" value="male" {{$checkMale}} />
                                        <div class="control-indicator"></div>
                                    </label>
                                    <label class="control control-checkbox">Female
                                        <input type="checkbox" name="gender[]" value="female" {{$checkFemale}}/>
                                        <div class="control-indicator"></div>
                                    </label>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer02">Parent Category</label>
                                    <select name="parent_id" class="form-control" required>
                                        <option value="0">-- Không --</option>
                                        @php
                                            $parent_id = isset($category) ? $category->parent_id : null;
                                            echo show_categories($categories,$parent_id);
                                        @endphp
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


  </div>
@endsection
