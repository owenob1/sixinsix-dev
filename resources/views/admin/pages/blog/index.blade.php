@extends('admin.layouts.app')

@section('title', 'Blog')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('platform_assets/lib/datatables/jquery.dataTables.css') }}" >
    <link rel="stylesheet" href="{{ asset('platform_assets/lib/select2/css/select2.min.css') }}" >
@endsection

@section('content')
    <div class="kt-pagetitle">
        <h5>All Blog</h5>
    </div><!-- kt-pagetitle -->

    <div class="kt-pagebody">
        <div class="row">
            <div class="col-md-2 ml-auto">
                <a href="{{ route('admin.blog.create') }}" class="btn btn-default pull-right">Add Blog</a>
            </div>
            <div class="col-md-12">
                @if(Session::has('success_information'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {!! Session::get('success_information') !!}
                    </div><!-- alert -->
                @endif
            </div>
        </div>
        <div class="card pd-20 pd-sm-40">
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                    <tr>
                        <th class="wd-25p">Title</th>
                        <th class="wd-25p">Tag</th>
                        <th class="wd-35p">Image</th>
                        <th class="wd-15p">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blog as $key => $value)
                        <tr>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->tag }}</td>
                            <td><img src="{{ $value->image }}" width="150px"/></td>
                            <td>
                                <a href="{{route('admin.blog.edit', $value->id)}}" class="btn btn-outline-success active"><i class="icon ion-edit"></i></a>
                                <a href="{{route('admin.blog.delete', $value->id)}}" class="btn btn-outline-danger active"><i class="icon ion-close"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('platform_assets/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('platform_assets/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('platform_assets/lib/select2/js/select2.min.js') }}"></script>
    <script>
        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
    </script>

@endsection