@extends('admin.layouts.app')

@section('title', 'Payments')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('platform_assets/lib/datatables/jquery.dataTables.css') }}" >
    <link rel="stylesheet" href="{{ asset('platform_assets/lib/select2/css/select2.min.css') }}" >
@endsection

@section('content')
    <div class="kt-pagetitle">
        <h5>All Stripe Plans</h5>
    </div><!-- kt-pagetitle -->
    <div class="kt-pagebody">
        <div class="row">
            <div class="col-md-2 ml-auto">
                <a href="javascript:void(0)" class="btn btn-default pull-right mg-b-30" onclick="onAddStripePlan()">Add Plan</a>
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
                        <th class="wd-10p">Duration</th>
                        <th class="wd-15p">Price</th>
                        <th class="wd-35p">Plan Code</th>
                        <th class="wd-15p">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($plans as $key => $plan)
                            <tr>
                                <td>{{ $plan->title }}</td>
                                <td>{{ $plan->duration }}</td>
                                <td>{{ $plan->price }}$</td>
                                <td>{{ $plan->plan_code }}</td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-outline-success active" onclick="onEditStripe({{$plan->id}})"><i class="icon ion-edit"></i></a>
                                    <a href="{{route('admin.payments.stripe.delete', $plan->id)}}" class="btn btn-outline-danger active"><i class="icon ion-close"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="addStripeModal" class="modal fade">
        <div class="modal-dialog modal-lg" role="document" style="width: 100%">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold" id="stripeTitle">Add Stripe Plan</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-20">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('admin.payments.stripe.create') }}" id="stripe_plan_form" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="plan_id" id="planID">
                                <div class="form-group">
                                    <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="title" value="" placeholder="Enter Title" id="title">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="number" name="price" value="" placeholder="Enter Price" id="price">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Duration: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="duration" value="" placeholder="Enter Duration" id="duration">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Plan Code: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="plan_code" value="" placeholder="Enter Plan Code" id="plan_code">
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pd-x-20" onclick="onSaveStripe()">Save changes</button>
                    <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal" onclick="onResetForm()">Close</button>
                </div>
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->
@endsection

@section('custom-js')
    <script src="{{ asset('platform_assets/lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('platform_assets/lib/datatables-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('platform_assets/lib/select2/js/select2.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
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

        function onAddStripePlan() {
            $("#stripeTitle").html("Add Stripe Plan");
            $("#addStripeModal").modal('show');
        }
        function onSaveStripe(){
            $("#stripe_plan_form").submit();
        }
        function onEditStripe(id){
            $.ajax({
                url: '{{route('admin.payments.stripe.get')}}',
                method: 'POST',
                data: {'id': id, "_token": "{{ csrf_token() }}"},
                success: function (response){
                    if(response.result == 'success'){
                        $("#stripeTitle").html('Edit Stripe Plan');
                        $("#planID").val(response.plan.id);
                        $("#title").val(response.plan.title);
                        $("#price").val(response.plan.price);
                        $("#duration").val(response.plan.duration);
                        $("#plan_code").val(response.plan.plan_code);
                        $("#addStripeModal").modal('show');
                    }
                }
            })
        }
        function onResetForm(){
            $('#stripe_plan_form')[0].reset();
            $('#planID').val('');
        }
        $(document).ready(function() {
            $("#stripe_plan_form").validate({
                rules: {
                    title: "required",
                    price: {
                        required: true,
                        number: true
                    },
                    duration: "required",
                    plan_code :"required"
                },
                // Specify validation error messages
                messages: {
                    title: "Please enter plan title",
                    duration: "Please enter plan duration",
                    plan_code: "Please enter plan code",
                    price: {
                        required: "Please enter plan price",
                        number: "Please enter a valid price"
                    }
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function(response) {
                            if(response.result == 'success'){
                                $('#stripe_plan_form')[0].reset();
                                $("#addStripeModal").modal('hide');
                                window.location.reload();
                            }
                        }
                    });
                }
            });
        });
    </script>

@endsection