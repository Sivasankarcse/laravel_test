@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts/sidebar');
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Add position</div>

                <form method="post" action="/position/store">
                    @csrf
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="form-group mt-3">
                                        <label for="position_name">Position Name</label>
                                        <input type="text" class="form-control" name="position_name" id="position_name" placeholder="Enter Position Name">
                                    </div>
                                    <div class="form-group mt-3 mb-4">
                                        <label for="position_code">Position Code</label>
                                        <input type="text" class="form-control" name="position_code" id="position_code" placeholder="Enter Position Code">
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