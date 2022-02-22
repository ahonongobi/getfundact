@extends('_layouts._admin')

@section('content')
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Bootstrap alerts in fill colors</h4>
      
      <div class="alert alert-fill-primary" role="alert">
        <i class="mdi mdi-alert-circle"></i> There! This is a primary alert. </div>
      <div class="alert alert-fill-success" role="alert">
        <i class="mdi mdi-alert-circle"></i> Well done! You successfully read this important alert message. </div>
      <div class="alert alert-fill-info" role="alert">
        <i class="mdi mdi-alert-circle"></i> Heads up! This alert needs your attention, but it's not super important. </div>
      <div class="alert alert-fill-warning" role="alert">
        <i class="mdi mdi-alert-circle"></i> Warning! Better check yourself, you're not looking too good. </div>
      <div class="alert alert-fill-danger" role="alert">
        <i class="mdi mdi-alert-circle"></i> Oh snap! Change a few things up and try submitting again. </div>
    </div>
  </div>
</div>
@endsection