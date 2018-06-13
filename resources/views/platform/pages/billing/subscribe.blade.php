@extends('platform.layouts.app')

@section('title', 'Subscribe')

@section('content')
  <div class="kt-pagetitle">
    <h5>Payment Details</h5>
  </div><!-- kt-pagetitle -->

  <div class="kt-pagebody">

          <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Credit Card</h6>
            <p class="mg-b-20 mg-sm-b-30">Please enter your payment details below.</p>

            <form accept-charset="UTF-8" action="/platform/payment" class="require-validation"
              data-cc-on-file="false"
              data-stripe-publishable-key="pk_test_qeG17oiSUVujNP645NIF4oHF"
              id="payment-form" method="post">
              {{ csrf_field() }}
              <div class="row mg-b-25">
                <div class="col-lg-10">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Name on card: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" placeholder="John Smith">
                  </div>
                </div><!-- col-8 -->
                <div class="col-lg-10">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Card Number: <span class="tx-danger">*</span></label>
                    <input class="form-control card-number" type="text" placeholder="0000 0000 0000 0000">
                  </div>
                </div><!-- col-8 -->
                </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">CVC: <span class="tx-danger">*</span></label>
                      <input class="form-control card-cvc" type="text" placeholder="ex. 313">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Expiration: <span class="tx-danger">*</span></label>
                      <input class="form-control card-expiry-month" type="text" placeholder="MM">
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                    
                      <input class="form-control card-expiry-year" type="text" placeholder="YYYY">
                    </div>
                  </div>
              </div><!-- row -->

              <div class="form-layout-footer">
                <button class="form-control btn btn-default mg-r-5 submit-button" type='submit'>Submit Payment</button>
              </div><!-- form-layout-footer -->
            </form><!-- form-layout -->
            @if ((Session::has('success-message')))
            <div class="alert alert-success col-md-12">{{
              Session::get('success-message') }}</div>
            @endif @if ((Session::has('fail-message')))
            <div class="alert alert-danger col-md-12">{{
              Session::get('fail-message') }}</div>
            @endif
          </div><!-- card -->
</div>

@endsection
