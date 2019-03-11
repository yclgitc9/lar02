@extends('layouts.appx')

@section('content')
    <h3 class="page-title">Employees</h3>
    
    {!! Form::model($employee, ['method' => 'PUT', 'route' => ['employees.update', $employee->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('last_name', 'Last Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('last_name'))
                        <p class="help-block">
                            {{ $errors->first('last_name') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('salary', 'Salary*', ['class' => 'control-label']) !!}
                    {!! Form::text('salary', old('salary'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('salary'))
                        <p class="help-block">
                            {{ $errors->first('salary') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Department</label>
                <div class="col-md-6">
                    <select class="form-control js-country" name="department_id">
                        <option value="-1">Please select your department</option>
                        @foreach ($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('author', 'Author*', ['class' => 'control-label']) !!}
                    {!! Form::text('author', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div> -->
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

