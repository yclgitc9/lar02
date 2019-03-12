@extends('layouts.appx')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                    <p>Number of users = {{ $users->count() }}</p>
                    <p>Number of products = {{ $products->count() }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
