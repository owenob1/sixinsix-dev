@extends('layouts.app')

@section('title', trans('terms.create'))

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">{{ trans('terms.create') }}</h3></div>
            {!! Form::open(['route' => 'terms.store']) !!}
            <div class="panel-body">
                {!! FormField::text('name', ['required' => true, 'label' => trans('terms.name')]) !!}
                {!! FormField::textarea('description', ['label' => trans('terms.description')]) !!}
            </div>
            <div class="panel-footer">
                {!! Form::submit(trans('terms.create'), ['class' => 'btn btn-success']) !!}
                {{ link_to_route('terms.index', trans('app.cancel'), [], ['class' => 'btn btn-default']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
