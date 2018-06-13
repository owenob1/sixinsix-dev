@extends('layouts.app')

@section('title', trans('terms.edit'))

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        @if (request('action') == 'delete' && $terms)
        @can('delete', $terms)
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">{{ trans('terms.delete') }}</h3></div>
                <div class="panel-body">
                    <label class="control-label">{{ trans('terms.name') }}</label>
                    <p>{{ $terms->name }}</p>
                    <label class="control-label">{{ trans('terms.description') }}</label>
                    <p>{{ $terms->description }}</p>
                    {!! $errors->first('terms_id', '<span class="form-error small">:message</span>') !!}
                </div>
                <hr style="margin:0">
                <div class="panel-body">{{ trans('app.delete_confirm') }}</div>
                <div class="panel-footer">
                    {!! FormField::delete(
                        ['route' => ['terms.destroy', $terms]],
                        trans('app.delete_confirm_button'),
                        ['class'=>'btn btn-danger'],
                        [
                            'terms_id' => $terms->id,
                            'page' => request('page'),
                            'q' => request('q'),
                        ]
                    ) !!}
                    {{ link_to_route('terms.edit', trans('app.cancel'), [$terms], ['class' => 'btn btn-default']) }}
                </div>
            </div>
        @endcan
        @else
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">{{ trans('terms.edit') }}</h3></div>
            {!! Form::model($terms, ['route' => ['terms.update', $terms],'method' => 'patch']) !!}
            <div class="panel-body">
                {!! FormField::text('name', ['required' => true, 'label' => trans('terms.name')]) !!}
                {!! FormField::textarea('description', ['label' => trans('terms.description')]) !!}
            </div>
            <div class="panel-footer">
                {!! Form::submit(trans('terms.update'), ['class' => 'btn btn-success']) !!}
                {{ link_to_route('terms.show', trans('app.cancel'), [$terms], ['class' => 'btn btn-default']) }}
                @can('delete', $terms)
                    {{ link_to_route('terms.edit', trans('app.delete'), [$terms, 'action' => 'delete'], ['class' => 'btn btn-danger pull-right', 'id' => 'del-terms-'.$terms->id]) }}
                @endcan
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endif
@endsection
