@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts/sidebar');
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Add Employee</div>

                <form method="post" action="/employee/store">
                    @csrf
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-around">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="employee_name">Employee Name</label>
                                        <input type="text" class="form-control" id="employee_name" placeholder="Emplyee Name">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="employee_email">Employee Email</label>
                                        <input type="text" class="form-control" id="employee_email" placeholder="Employee email">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="dob">Date Of Birth</label>
                                        <input type="date" class="form-control" id="dob" placeholder="Employee D.O.B">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="employee_qualification">Qualification</label>
                                        <input type="text" class="form-control" id="employee_qualification" placeholder="Employee Qualification">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="employee_department">Department</label>
                                        <input type="text" class="form-control" id="employee_department" placeholder="Employee Department">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="employee_position">Employee Position</label>
                                        <input type="text" class="form-control" id="employee_position" placeholder="Employee Position">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="employee_joining_date">Joining Date</label>
                                        <input type="date" class="form-control" id="employee_joining_date" placeholder="Joining Date">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="employee_type">Employee Type</label>
                                        <input type="text" class="form-control" id="employee_type" placeholder="Employee Type">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="employee_status">Employee Status</label>
                                        <input type="text" class="form-control" id="employee_status" placeholder="Employee Status">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="employee_salary">Employee Salary</label>
                                        <input type="text" class="form-control" id="employee_salary" placeholder="Employee Salary">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="employee_password">Employee Password</label>
                                        <input type="text" class="form-control" id="employee_password" placeholder="Employee Password">
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