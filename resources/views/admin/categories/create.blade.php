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
                        <form action="{{route('category.store')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer01">Category</label>
                                    <input type="text" class="form-control" id="validationServer01" name="category" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationServer02">Parent Category</label>
                                    <select name="parent_id" class="form-control" required>
                                        <option value="0">-- Không --</option>
                                        @php
                                            echo show_categories($categories);
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

@if(session('status'))
    <script>
        $(window).on('load',function(){
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Thêm danh mục thành công!!!',
                showConfirmButton: false,
                timer: 1500
            })
        })
    </script>
@endif