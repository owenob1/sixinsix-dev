@extends('platform.layouts.app')

@section('title', 'Profile')

@section('content')


  <!-- ##### MAIN PANEL ##### -->
   <div class="kt-pagetitle">
     <h5>{{ Auth::user()->name }}</h5>
   </div><!-- kt-pagetitle -->

   <div class="kt-pagebody">
<div class="card pd-20 pd-sm-40">
     Your profile will be here soon, {{ Auth::user()->name }}.
</div>
   </div><!-- kt-pagebody -->


@endsection
