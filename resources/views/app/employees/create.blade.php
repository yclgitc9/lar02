@extends('layouts.appx')

@section('content')
    <h3 class="page-title">Employees</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['employees.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    <!-- @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif -->
                </div>
            </div> 

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('Last Name', 'Last Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('last_name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    <!-- @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif -->
                </div>
            </div> 

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('Salary', 'Salary*', ['class' => 'control-label']) !!}
                    {!! Form::text('salary', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    <!-- @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif -->
                </div>
            </div>

             

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('department_id', 'Department', ['class' => 'control-label']) !!}
                    {!! Form::select('department_id', $departments, old('department_id'), ['class' => 'form-control select2']) !!}
                    
                </div>
            </div> 
        </div>
    </div>

    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

