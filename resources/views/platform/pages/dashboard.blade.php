@extends('platform.layouts.app')

@section('title', 'Dashboard')

@section('content')


  <!-- ##### MAIN PANEL ##### -->
   <div class="kt-pagetitle">
     <h5>Dashboard</h5>
   </div><!-- kt-pagetitle -->

   <div class="kt-pagebody">

<div class="card pd-20 pd-sm-40">

  <h5>Welcome to SixInSix.</h5>
  <p>
    As a new Client of ours we'd like to thank you for choosing to work with us.
  </p>
  <div id="wizard1">
    <h3>Personal Information</h3>
    <section>
      <p>Try the keyboard navigation by clicking arrow left or right!</p>
    </section>
    <h3>Billing Information</h3>
    <section>
      <p>Wonderful transition effects.</p>
    </section>
    <h3>Payment Details</h3>
    <section>
      <p>The next and previous buttons help you to navigate through your content.</p>
    </section>
  </div>
</div>

   </div><!-- kt-pagebody -->
<script>
$('#wizard1').steps({
  headerTag: 'h3',
  bodyTag: 'section',
  autoFocus: true,
  titleTemplate: '#index# #title#'
});
</script>

@endsection
