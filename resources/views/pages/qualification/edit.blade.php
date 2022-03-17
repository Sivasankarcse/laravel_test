@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts/sidebar');
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Edit Qualification</div>

                <form method="post" action="/qualification/update/{{$qualificationDetails->qualification_id}}">
                    @csrf
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="form-group mt-3">
                                        <label for="qualification_name">Qualification Name</label>
                                        <input type="text" class="form-control" name="qualification_name" value="{{$qualificationDetails->qualification_name}}" id="qualification_name" placeholder="Enter Qualification Name">
                                    </div>
                                    <div class="form-group mt-3 mb-4">
                                        <label for="qualification_code">Qualification Code</label>
                                        <input type="text" class="form-control" name="qualification_code" value="{{$qualificationDetails->qualification_code}}" id="qualification_code" placeholder="Enter Qualification Code">
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