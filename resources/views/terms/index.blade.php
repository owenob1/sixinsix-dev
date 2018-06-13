@extends('layouts.app')

@section('title', trans('terms.list'))

@section('content')
<h1 class="page-header">
    <div class="pull-right">
    @can('create', new App\Terms)
        {{ link_to_route('terms.create', trans('terms.create'), [], ['class' => 'btn btn-success']) }}
    @endcan
    </div>
    {{ trans('terms.list') }}
    <small>{{ trans('app.total') }} : {{ $terms->total() }} {{ trans('terms.terms') }}</small>
</h1>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default table-responsive">
            <div class="panel-heading">
                {{ Form::open(['method' => 'get','class' => 'form-inline']) }}
                {!! FormField::text('q', ['value' => request('q'), 'label' => trans('terms.search'), 'class' => 'input-sm']) !!}
                {{ Form::submit(trans('terms.search'), ['class' => 'btn btn-sm']) }}
                {{ link_to_route('terms.index', trans('app.reset')) }}
                {{ Form::close() }}
            </div>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th class="text-center">{{ trans('app.table_no') }}</th>
                        <th>{{ trans('terms.name') }}</th>
                        <th>{{ trans('terms.description') }}</th>
                        <th class="text-center">{{ trans('app.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($terms as $key => $terms)
                    <tr>
                        <td class="text-center">{{ $terms->firstItem() + $key }}</td>
                        <td>{{ $terms->nameLink() }}</td>
                        <td>{{ $terms->description }}</td>
                        <td class="text-center">
                        @can('view', $terms)
                            {!! link_to_route(
                                'terms.show',
                                trans('app.show'),
                                [$terms],
                                ['class' => 'btn btn-default btn-xs', 'id' => 'show-terms-' . $terms->id]
                            ) !!}
                        @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="panel-body">{{ $terms->appends(Request::except('page'))->render() }}</div>
        </div>
    </div>
</div>
@endsection
