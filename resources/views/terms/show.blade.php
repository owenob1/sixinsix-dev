@extends('layouts.app')

@section('title', trans('terms.detail'))

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">{{ trans('terms.detail') }}</h3></div>
            <table class="table table-condensed">
                <tbody>
                    <tr>
                        <td>{{ trans('terms.name') }}</td>
                        <td>{{ $terms->name }}</td>
                    </tr>
                    <tr>
                        <td>{{ trans('terms.description') }}</td>
                        <td>{{ $terms->description }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="panel-footer">
                @can('update', $terms)
                    {{ link_to_route('terms.edit', trans('terms.edit'), [$terms], ['class' => 'btn btn-warning', 'id' => 'edit-terms-'.$terms->id]) }}
                @endcan
                {{ link_to_route('terms.index', trans('terms.back_to_index'), [], ['class' => 'btn btn-default']) }}
            </div>
        </div>
    </div>
</div>
@endsection
