@extends('backend.default')
@section('content')
<section class="content">
   <div class="row">
      <div class="col-md-6">
         <div class="box box-danger">
            <div class="box-header">
               <h3 class="box-title">Add Course</h3>
            </div>
            <div class="box-body">
               <!-- Date dd/mm/yyyy -->
               <form action="{{url('admin/addcourse')}}" method="post">
               {{ csrf_field() }}
               <input type="hidden" name="id" class="form-control"  value="{{$coursers->id}}" />

               <div class="form-group">
                  <label>Course Code</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                     </div>
                     <input type="text" name="coursecode" id="coursecode"  value="{{$coursers->coursecode}}" class="form-control "   required  />                     </div>
                    
                  
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- Date mm/dd/yyyy -->
               <div class="form-group">
               <label>Course Name</label>

                  <div class="input-group">
                     <div class="input-group-addon">
                        <!-- <i class="fa fa-calendar"></i> -->
                     </div>
                     <input type="text" name="coursename" value="{{$coursers->coursename}}"  class="form-control accordion--form__text required" required />
                     </div>
                     
                  
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- phone mask -->
               <div class="form-group">
                  <label>Category</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <!-- <i class="fa fa-phone"></i> -->
                     </div>
                     <input type="text" name="category"  value="{{$coursers->category}}" class="form-control accordion--form__text required"   required  />
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- phone mask -->
               <div class="form-group">
                  <label>Sub Category</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <!-- <i class="fa fa-phone"></i> -->
                     </div>
                     <input type="text" name="sub_category" value="{{$coursers->sub_category}}"  class="form-control accordion--form__text required" required />
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- IP mask -->
               <div class="form-group">
                  <label>Start Date:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>

                     </div>
                     <input type="text" name="startdate" value="{{$coursers->startdate}}"  class="form-control accordion--form__text required"   required  />

                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <div class="form-group">
                  <label>End Date</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <input type="text" name="enddate"  value="{{$coursers->enddate}}" class="form-control accordion--form__text required" required />

                            </div>
                  <!-- /.input group -->
               </div>
               <div class="form-group">
                  <label>Description</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <textarea name="description" id="textarea-input" value="{{$coursers->description}}" rows="2" placeholder="Description..." class="form-control"></textarea>            </div>
                  <!-- /.input group -->
               </div>
            
            
            </div>
          
            <button type="submit" class="btn btn-block btn-primary">Submit</button>

         </div>
         <!-- /.box-body -->
      </div>
    </form>
      <!-- /.box -->
   </div>
  
</section>

@stop