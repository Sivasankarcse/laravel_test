@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts/sidebar');
        </div>
        <div class="col-md-9">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    <!-- <button type="button" class="btn btn-close" data-dismiss="alert">x</button> -->
                </div>
            @endif
            <div class="card">
                <div class="card-header">Qualification List</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Qualification Name</th>
                                <th scope="col">Qualification Code</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($sno=1)
                            @foreach($qualification as $quali)
                                <tr>
                                    <th scope="row">{{$sno++}}</th>
                                    <td>{{$quali->qualification_name}}</td>
                                    <td>{{$quali->qualification_code}}</td>
                                    <td>
                                        <a href="/qualification/edit/{{$quali->qualification_id}}" class='btn btn-warning btn-sm'>Edit</a>
                                        <a href="/qualification/destroy/{{$quali->qualification_id}}" class='btn btn-danger btn-sm'>Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(function(){
        setTimeout(() => {
            $('.alert').remove();
        }, 3000);
    });
</script>
@endsection