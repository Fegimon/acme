@extends('backend.default')
@section('content')
<section class="content">
<!-- SELECT2 EXAMPLE -->
<div class="box box-default">
   
   <!-- /.box-header -->
   <div class="box-body">
      <div class="row">
      <form action="{{url('admin/addstudent')}}" method="post" id="addstudent" enctype="multipart/form-data">
                    {{ csrf_field() }}
         <div class="container">
         <div class="tab">
         <input type="hidden" name="id" class="form-control"  value="{{$studentrs->id}}" />
      <h4 >Edit Student Details</h4>
      <br>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group ">
               <label class="control-label">First Name</label>
               <input type="text" name="firstname" class="form-control" value="{{$studentrs->firstname}}"  required pattern="[a-zA-Z]{0,30}" title="FirstName should only contain letters" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Last Name</label>
               <input type="text" name="lastname" class="form-control" value="{{$studentrs->lastname}}"  required pattern="[a-zA-Z]{0,30}" title="Lastname should only contain letters"/>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Date Of Birth</label>
               <input type="date" name="dob" class="form-control" value="{{$studentrs->dob}}" title="FirstName should only contain letters" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Email</label>
               <input type="text" name="email" class="form-control" value="{{$studentrs->email}}" title="Lastname should only contain letters"/>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label for="gender">Gender</label><br>
               <select class="form-control" name="gender" value="{{$studentrs->gender}}">
               <option value="<?php echo $studentrs->gender;?>" <?php echo ($studentrs->gender) ? ' selected="selected"' : '';?>><?php echo $studentrs->gender;?></option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
               </select>
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Age</label>
               <input type="text" class="form-control"  name=" age" value="{{$studentrs->age}}" maxlength="3" pattern="[0-9]{0,3}" title="Age should only contain numbers" />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Blood Group</label>
               <input type="text" class="form-control" name=" bloodgroup"  value="{{$studentrs->bloodgroup}}" required  />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Religion</label><br>
               <select name="religion" class="form-control"  value="{{$studentrs->religion}}" >
               <option value="<?php echo $studentrs->religion;?>" <?php echo ($studentrs->religion) ? ' selected="selected"' : '';?>><?php echo $studentrs->religion;?></option>

                  <option value="hindu">Hindu</option>
                  <option value="muslem">Muslem</option>
                  <option value="christian">Christian</option>
               </select>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Upload Photo</label>

               <input type="file" class="form-control" name=" student_image"   required  />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Photo</label><br>
               <img src="{{ asset('public/upload/student/'.$studentrs->student_image) }}" width="90px">

            </div>
         </div>
      </div>
   </div>
   <div class="tab">
      <h4>Addmission Detail</h4>
      <br>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group ">
               <label class="control-label">Admission Number</label>
               <input type="text" name="admission_no" class="form-control" value="{{$studentrs->admission_no}}"  title="FirstName should only contain letters" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Admission Date</label>
               <input type="date" name="admission_date" class="form-control" value="{{$studentrs->admission_date}}"  title="Lastname should only contain letters"/>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Date Of Joining</label>
               <input type="date" name="doj" class="form-control"  value="{{$studentrs->doj}}"   title="FirstName should only contain letters" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Course</label>
               <select class="form-control select2 accordion--form__text required" value="{{$studentrs->course}}"  name="course" style="width: 100%;">
                  <option selected="selected">Select Course</option>
                  <option value="<?php echo $studentrs->course;?>" <?php echo ($studentrs->course) ? ' selected="selected"' : '';?>><?php echo $studentrs->course;?></option>

                  <option value="java">Java</option>
                  <option value="dotnet">Dotnet</option>
                  <option value="php">PHP</option>
                </select>             
                </div>
         </div>
      </div>
   </div>
   <div class="tab">
      <h4 >Personel Details</h4>
      <br>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group ">
               <label class="control-label">Father Name</label>
               <input type="text" name="father_name" class="form-control"  value="{{$studentrs->father_name}}"  required pattern="[a-zA-Z]{0,30}" title="FirstName should only contain letters" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Mother Name</label>
               <input type="text" name="mother_name" class="form-control" value="{{$studentrs->mother_name}}"   required pattern="[a-zA-Z]{0,30}" title="Lastname should only contain letters"/>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Father Occupation</label>
               <input type="text" name="occupation" class="form-control"  value="{{$studentrs->occupation}}"  required pattern="[a-zA-Z]{0,30}" title="FirstName should only contain letters" />
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">Father Mobile</label>
               <input type="text" name="father_mobile" class="form-control" value="{{$studentrs->father_mobile}}"   title="Lastname should only contain letters"/>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-2 col-lg-4">
            <div class="form-group">
               <label for="gender">Address</label><br>
               <input type="text" name="address" class="form-control" value="{{$studentrs->address}}"  required pattern="[a-zA-Z]{0,30}" title="Lastname should only contain letters"/>
            </div>
         </div>
         <div class="col-md-2 col-lg-4">
            <div class="form-group">
               <label class="control-label">City</label>
               <input type="text" class="form-control"  name=" city" value="{{$studentrs->city}}"   title="Age should only contain numbers" />
            </div>
         </div>
      </div>
   </div>
 <button type="button" class="btn btn-success btn-lg" id="btnSubmit"><i class="fa fa-save"></i> Save</button>
   </form>
   </div>
   </div>
   </div>
   </div>
  
<section>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<script>

$(document).on('click', '#btnSubmit', function () {
    //alert('click');
       //var data  = $('#addstudent').serializeArray();
       var data = new FormData($('#addstudent')[0]);
       var url = "{{url('admin/addstudent')}}";
     $.ajax({
           type:'POST',
           url:url,
           data:data,
           dataType: "json",
           processData: false,
           contentType: false,
           async:true,
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
           success:function(response){
               // console.log(response);
               if(response.status='1')
               
               {
                   console.log(response);
                   window.location.href = "{{ url('backend/studentdetails') }}";
                 
               }
        }
     });
   });

</script>


@stop