@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts/sidebar');
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Add Department</div>

                <form method="post" action="/department/store">
                    @csrf
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="form-group mt-3">
                                        <label for="department_name">Department Name</label>
                                        <input type="text" class="form-control" name="department_name" id="department_name" placeholder="Enter Department Name">
                                    </div>
                                    <div class="form-group mt-3 mb-4">
                                        <label for="department_code">Department Code</label>
                                        <input type="text" class="form-control" name="department_code" id="department_code" placeholder="Enter Department Code">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection