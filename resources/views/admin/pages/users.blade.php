@extends('admin.layouts.app')

@section('title', 'Users')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('platform_assets/lib/datatables/jquery.dataTables.css') }}" >
    <link rel="stylesheet" href="{{ asset('platform_assets/lib/select2/css/select2.min.css') }}" >
@endsection
@section('content')

    <div class="kt-pagetitle">
        <h5>All Users</h5>
    </div><!-- kt-pagetitle -->

    <div class="kt-pagebody">
        <div class="card pd-20 pd-sm-40">
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                    <tr>
                        <th class="wd-25p">First name</th>
                        <th class="wd-25p">Last name</th>
                        <th class="wd-20p">Website</th>
                        <th class="wd-30p">E-mail</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $user)
                            <tr>
                                <td>{{ $user->profile->first_name }}</td>
                                <td>{{ $user->profile->last_name }}</td>
                                <td>{{ $user->profile->website }}</td>
                                <td>{{ $user->email }}</td>
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