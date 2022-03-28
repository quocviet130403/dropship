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
                            $action = isset($page) ? route('page.update',$page->id) : route('page.store');
                        @endphp
                        <form action="{{$action}}" method="POST">
                            @if(isset($page))
                                <input name="_method" type="hidden" value="PUT">
                            @endif
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer01">page</label>
                                    <input type="text" class="form-control" id="validationServer01" name="page" value="{{isset($page) ? $page->page : ''}}" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" id="status" required>
                                        <option value="0" {{(isset($page) && $page->status == 0) ? "selected" : ""}}>Pedding</option>
                                        <option value="1" {{(isset($page) && $page->status == 1) ? "selected" : ""}}>Completed</option>
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
