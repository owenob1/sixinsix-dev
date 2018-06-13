@extends('platform.layouts.app')

@section('title', 'Invoices')

@section('content')
  <div class="kt-pagetitle">
    <h5>Invoices</h5>
  </div><!-- kt-pagetitle -->

  <div class="kt-pagebody">
           <div class="card pd-20 pd-sm-40 mg-t-50">
             <h6 class="card-body-title">Invoices</h6>
             <p class="mg-b-20 mg-sm-b-30">View and download your SixInSix invoices.</p>

             <div class="table-responsive">
               <table class="table table-hover mg-b-0">
                 <thead>
                   <tr>
                     <th>Date</th>
                     <th>Product</th>
                     <th>Price</th>
                     <th>Download</th>
                   </tr>
                 </thead>
                 <tbody>
                   @if(count($invoices) >0)
                      @foreach ($invoices as $invoice)
                         <tr>
                           <td>{{ $invoice->date()->toFormattedDateString() }}</td>
                           <td>Startup Growth Plan</td>
                           <td>{{ $invoice->total() }}</td>
                           <td><a href="/platform/billing/invoice/{{ $invoice->id }}"><i class="icon ion-document-text"></i> Download</a></td>
                         </tr>
                       @endforeach
                    @endif
                 </tbody>
               </table>
             </div><!-- table-responsive -->
           </div><!-- card -->
         </div>
  @endsection
