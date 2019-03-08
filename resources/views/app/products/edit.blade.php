@extends('layouts.appx')

@section('content')
    <h3 class="page-title">Products Edit</h3>
    
    {!! Form::model($product, ['method' => 'PUT', 'route' => ['products.edit', $product->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            editing
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Product Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('category', 'Product Category*', ['class' => 'control-label']) !!}
                    {!! Form::text('category', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Country</label>
                    <div class="col-md-6">
                        <select class="form-control js-country" name="country_id">
                            <option value="-1">Please select your category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

