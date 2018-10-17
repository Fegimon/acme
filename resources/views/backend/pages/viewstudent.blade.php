@extends('backend.default')
@section('content')
<section class="content">

 <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Student Setails
            <!-- <small class="pull-right">Date: 2/10/2014</small> -->
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
        <strong> First Name</strong><br><br>
        <strong> Last Name</strong><br><br>
        <strong> Date Of Birth</strong><br><br>
        <strong> Email</strong><br><br>
        <strong>Gender</strong><br><br>
        <strong> Age</strong><br><br>
        <strong> Blood Group</strong><br><br>
        <strong>Religion</strong><br><br>
        <strong> Admission Number</strong><br><br>
        <strong> Admission Date</strong><br><br>
        <strong> Date Of Joining</strong><br><br>
        <strong> Father Name</strong><br><br>
        <strong>Mother Name</strong><br><br>
        <strong> Father Occupation</strong><br><br>
        <strong> Father Mobile</strong><br><br>
        <strong>Address</strong><br><br>
        <strong>City</strong><br><br>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        {{ $studentrs->firstname}}   <br><br>
        {{ $studentrs->lastname}}   <br><br>
        {{ $studentrs->dob}}   <br><br>
        {{ $studentrs->email}}   <br><br>
        {{ $studentrs->gender}}   <br><br>
        {{ $studentrs->age}}   <br><br>
        {{ $studentrs->bloodgroup}}   <br><br>
        {{ $studentrs->religion}}   <br><br>
        {{ $studentrs->admission_no}}   <br><br>
        {{ $studentrs->admission_date}}   <br><br>
        {{ $studentrs->doj}}   <br><br>
        {{ $studentrs->father_name}}   <br><br>
        {{ $studentrs->mother_name}}   <br><br>
        {{ $studentrs->occupation}}   <br><br>
        {{ $studentrs->father_mobile}}   <br><br>
        {{ $studentrs->address}}   <br><br>
        {{ $studentrs->city}}   <br><br>

        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        <img src="{{ asset('public/upload/student/'.$studentrs->student_image) }}" width="90px">

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      

     
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
          </button>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
        </div>
      </div>
    </section>
<section>
@stop