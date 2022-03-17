@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts/sidebar');
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Employee List</div>

                <div class="card-body">
                    <h4>Employee List</h4>
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