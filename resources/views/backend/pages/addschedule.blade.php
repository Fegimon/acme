@extends('backend.default')
@section('content')

<section class="content">
   <div class="row">
      <div class="col-md-6">
         <div class="box box-danger">
            <div class="box-header">
               <h3 class="box-title">Add Batch Schedule</h3>
            </div>
            <div class="box-body">
               <!-- Date dd/mm/yyyy -->
               <form action="{{url('backend/addbatch')}}" id="batchForm" method="post">
               {{ csrf_field() }}
                  <div class="flash-message">
                              @include('backend.pages.notification')
                        </div>

                        <div id="validation-errors" class="alert alert-error" style="display: none;color:blue;">
						</div>
                        
                        <input type="hidden" class="form-control" id="course_id" name="course_id" value="{{ Request::segment(3) }}">

               <div class="form-group">
                  <label>Batch Name</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <input type="text" class="form-control" id="batch_name" name="batch_name" data-mask >

                     </div>
               </div>
              
              
               <div class="bootstrap-timepicker">
                 <div class="form-group">
                  <label>Start Time:</label>

                  <div class="input-group">
                     <div class="input-group-addon">
                       <i class="fa fa-clock-o"></i>
                     </div>
                    <input type="text" class="form-control timepicker" name="start_time"> 
                  </div>
                
                </div>
              </div>
              
              <div class="bootstrap-timepicker">
                 <div class="form-group">
                  <label>End Time </label>

                  <div class="input-group">
                     <div class="input-group-addon">
                       <i class="fa fa-clock-o"></i>
                     </div>
                    <input type="text" class="form-control timepicker" name="end_time"> 
                  </div>
                
                </div>
              </div>
              
            </div>
          
            <button type="submit" id="btnSubmit" class="btn btn-block btn-primary">Submit</button>

         </div>
         <!-- /.box-body -->
      </div>
    </form>
      <!-- /.box -->
   </div>
  
</section>

@stop