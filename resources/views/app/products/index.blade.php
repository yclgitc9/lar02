
@inject('request', 'Illuminate\Http\Request')
@extends('layouts.appx')

@section('content')
    <h3 class="page-title">Products</h3>
    <p>
        <a href="{{ route('products.create') }}" class="btn btn-success">Add New</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($products) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                        <th>name</th>
                        <th>author</th>
                        
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($products) > 0)
                        @foreach ($products as $product)
                            <tr data-entry-id="{{ $product->id }}">
                                <td></td>

                                <td>{{ $product->name }}</td>
                                <td>{{ $product->author }}</td>
                                
                                <td>
                                    <a href="{{ route('products.edit',[$product->id]) }}" class="btn btn-xs btn-info">Editx</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['products.index', $product->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>


    </div>
    
@stop

@section('javascript') 
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('products.mass_destroy') }}';
    </script>
@endsection
