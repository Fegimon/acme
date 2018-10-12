@extends('admin.default')
@section('content')
<div class="container">
   <div id="accordion">
      <div class="row">
         <div class="col-lg-12">
            <div class="text-center">
               <h1 class="text-info">ACME LEARNING</h1>
            </div>
         </div>
      </div>
      <div class="jumbotron">
      <form action="{{url('admin/addstudent')}}" method="post" id="addstudent" enctype="multipart/form-data">
                    {{ csrf_field() }}
         <div class="container">
            <h2 class="text-success"><b>Student Details</b></h2>
         </div>
         <div id="collapse1" class="collapse show">
            <div class="card-body">
               <div class="row">
                  <div class="col-sm-2 col-lg-4">
                     <div class="form-group">
                        <label class="control-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" required pattern="[a-zA-Z]{0,30}" title="FirstName should only contain letters" />
                     </div>
                  </div>
                  <div class="col-md-2 col-lg-4">
                     <div class="form-group">
                        <label class="control-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" required pattern="[a-zA-Z]{0,30}" title="Lastname should only contain letters"/>
                     </div>
                  </div>
                  <div class="col-md-2 col-lg-3">
                     <div class="form-group">
                        <label class="control-label">Date Of Birth</label>
                        <div class="input-group date">
                           <input class="form-control" type="text"  name="dob" required />
                           <span class="input-group-append">
                           <button class="btn btn-outline-secondary" type="button">
                           <i class="fa fa-calendar"></i>
                           </button></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4 col-lg-4">
                     <div class="form-group">
                        <label class="control-label">Email Address</label>
                        <input type="text"  name="email "class="form-control"  title="Please enter valid email id "/>
                     </div>
                  </div>
                  <div class="col-md-2 col-lg-3">
                     <div class="form-group">
                        <label for="gender">Gender</label><br>
                        <input type="radio"  name=" gender" value="male"/>Male &nbsp &nbsp
                        <input type="radio"  name=" gender" value="female"/>Female
                     </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                     <div class="form-group">
                        <label class="control-label">Age</label>
                        <input type="text" class="form-control" name=" age" maxlength="3" pattern="[0-9]{0,3}" title="Age should only contain numbers" />
                     </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                     <div class="form-group">
                        <label class="control-label">Blood Group</label>
                        <input type="text" class="form-control" name=" bloodgroup" required  />
                     </div>
                  </div>
                  <div class="col-md-3 col-lg-4">
                     <div class="form-group">
                        <label class="control-label">Religion</label><br>
                        <input type ="radio" name="religion" value="hindu" >Hindu &nbsp &nbsp
                        <input type ="radio" name="religion" value="muslem" >Muslem &nbsp &nbsp
                        <input type ="radio" name="religion" value="christian" >Christian &nbsp &nbsp
                     </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                     <div class="form-group">
                        <label> Upload Photo</label>	<br>				   
                        <input type="file" name="student_image" value="fileupload" id="fileupload">
                     </div>
                  </div>
                  <!-- <div class="col-md-2 col-lg-3">
                     <div class="form-group">
                         <label class="control-label">City</label>
                         <input type="text" name="city" class="form-control" pattern="[a-zA-Z]{0,30}"  title="city should only contain letters" />
                     </div>
                     </div> -->
                  <!-- <div class="col-md-3 col-lg-3">
                     <div class="form-group">
                         <label class="control-label">State</label>
                         <input type="text" class="form-control" name=" state" pattern="[a-zA-Z]{0,30}" title="State should only contain letters"  />
                     </div>
                     </div> -->
                  <!-- <div class="col-md-3 col-lg-2">
                     <div class="form-group">
                         <label class="control-label">Zip Code</label>
                         <input type="text" class="form-control"  pattern="[0-9]{0,}" maxlength="6" title="Please enter six digit pincode"  />
                     </div>
                     </div> -->
               </div>
               <div class="row">
                  <!-- <div class="col-md-4 col-lg-2">
                     <div class="form-group">
                           <label> Health Issues</label>	<br>				   
                       <input type ="radio" name="hi" value="yes">YES
                     <input type ="radio" name="hi" value="no">NO
                     </div>
                     </div> -->
                  <!-- <div class="col-md-3 col-lg-3">
                     <div class="form-group">
                         <label class="control-label">Nationality</label>
                         <input type="text" class="form-control" />
                     </div>
                     </div> -->
                  <!-- <div class="col-md-3 col-lg-3">
                     <div class="form-group">
                         <label class="control-label">GRADE</label>
                         
                     <fieldset>
                     <select name="standard">
                     <option value="">-- select one --</option>
                     <option value="ukg">UKG</option>
                     <option value="Lkg">LKG</option>
                     <option value="">1st std</option>
                     <option value="">2nd std</option>
                     <option value="">3rd std</option>
                     <option value="">4th std</option>
                     <option value="">5th std</option>
                     <option value="">6th std</option>
                     <option value="">7th std</option>
                     <option value="">8th std</option>
                     <option value="">9th std</option>
                           <option value="">10th std</option>
                           <option value="">11th std</option>
                           <option value="">12th std</option>
                         </select>
                     </fieldset>
                     </div>
                     </div> -->
                  <!-- <div class="col-md-4 col-lg-2">
                     <div class="form-group">
                         <label class="control-label">Subject Group</label>
                        <select >
                     <option>M.PC</option>
                     <option>BI.PC</option>
                     <option>CEC</option>
                     <option>HEC</option>
                     
                     </select>
                     </div>
                     </div> -->
                  <!-- <div class="col-md-4 col-lg-12">
                     <div class="form-group">
                         <label class="control-label">School Name</label>
                         <input type="text" class="form-control" />
                     </div>
                     </div> -->
                  <!-- <div class="col-md-3 col-lg-2">
                     <div class="form-group">
                           <label> SecondLanguage</label>	<br>				   
                       <input type ="radio" name="lng" value="telugu">Telugu &nbsp 
                     <input type ="radio" name="lng" value="sanskrit">Sanskrit 
                     </div>
                     </div>
                     -->
               </div>
            </div>
         </div>
         `
      </div>
   </div>
   <div class="jumbotron">
      <div class="container">
         <h2 class="text-success"><b>Addmission Detail</b></h2>
      </div>
      <div class="row">
         <div class="col-md-3 col-lg-4">
            <div class="form-group">
               <label class="control-label">Admission Number</label>
               <input type="text" name="admission_no" class="form-control" />
            </div>
         </div>
         <div class="col-md-3 col-lg-4">
            <div class="form-group">
               <label class="control-label">Admission Date</label>
               <input type="text" name="admission_date" class="form-control" />
            </div>
         </div>
         <div class="col-md-4 col-lg-4">
            <div class="form-group">
               <label class="control-label">Date Of Joining</label>
               <input type="text" name="doj" class="form-control" />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 col-lg-4">
            <div class="form-group">
               <label class="control-label">School/Organization Address</label>
               <input type="text" name="school_name" class="form-control" />
            </div>
         </div>
         <div class="col-md-5 col-lg-3">
            <div class="form-group">
               <label class="control-label">City</label>
               <input type="text" name="school_city"class="form-control" />
            </div>
         </div>
         <div class="col-md-4 col-lg-3">
            <div class="form-group">
               <label class="control-label">State</label>
               <input type="text" name="school_state"class="form-control" />
            </div>
         </div>
         <div class="col-md-4 col-lg-2">
            <div class="form-group">
               <label class="control-label">Zip Code</label>
               <input type="text" name="school_zip"class="form-control" />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 col-lg-5">
            <div class="form-group">
               <label class="control-label">Phone Number</label>
               <input type="text" name="school_mobile" class="phone form-control" />
            </div>
         </div>
         <div class="col-md-4 col-lg-3">
            <div class="form-group">
               <label class="control-label">Fax Number</label>
               <input type="text" name="school_fax" class="form-control" />
            </div>
         </div>
         <div class="col-md-4 col-lg-4">
            <label class="control-label">Email</label>
            <div class="input-group">
               <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
               <input type="text" name="school_email" class="form-control" />
            </div>
         </div>
      </div>
   </div>
   <div class="jumbotron">
      <div class="container">
         <h2 class="text-success"><b>Personel Details</b></h2>
      </div>
      <div class="row">
         <div class="col-md-3 col-lg-4">
            <div class="form-group">
               <label class="control-label">Father Name</label>
               <input type="text" name="father_name" class="form-control" />
            </div>
         </div>
         <div class="col-md-4 col-lg-4">
            <div class="form-group">
               <label class="control-label">Mother Name</label>
               <input type="text" name="mother_name" class="form-control" />
            </div>
         </div>
         <div class="col-md-3 col-lg-4">
            <div class="form-group">
               <label class="control-label">Father Occupation</label>
               <input type="text" name="occupation" class="form-control" />
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-2 col-lg-3">
            <div class="form-group">
               <label class="control-label">Father Mobile</label>
               <input type="text" name="father_mobile" class="form-control" />
            </div>
         </div>
         <div class="col-md-3 col-lg-3">
            <div class="form-group">
               <label class="control-label">Address</label>
               <input type="text" name="address" class="form-control" />
            </div>
         </div>
         <div class="col-md-5 col-lg-3">
            <div class="form-group">
               <label class="control-label">City</label>
               <input type="text" name="city" class="form-control" />
            </div>
         </div>
         <div class="col-md-4 col-lg-3">
            <div class="form-group">
               <label class="control-label">State</label>
               <input type="text" name="state" class="form-control" />
            </div>
         </div>
      </div>
      <!-- <div class="row">
         <div class="col-md-3 col-lg-4">
             <div class="form-group">
                 <label class="control-label">Organization Address</label>
                 <input type="text" class="form-control" />
             </div>
         </div>
         
         
         <div class="col-md-4 col-lg-2">
             <div class="form-group">
                 <label class="control-label">Zip Code</label>
                 <input type="text" class="form-control" />
             </div>
         </div>
         </div> -->
      <!-- <div class="row">
         <div class="col-md-4 col-lg-5">
             <div class="form-group">
                 <label class="control-label">Contact Information:(Phone Number)</label>
                 <input type="text" class="phone form-control" />
             </div>
         </div>
         
         <div class="col-md-4 col-lg-3">
             <div class="form-group">
                 <label class="control-label">Fax Number</label>
                 <input type="text" class="form-control" />
             </div>
         </div>
         
         <div class="col-md-4 col-lg-4">
             <label class="control-label">Email</label>
             <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                 <input type="text" class="form-control" />
             </div>
         </div>
         </div> -->
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="pull-right">
            <button type="button" class="btn btn-success btn-lg" id="btnSubmit"><i class="fa fa-save"></i> Save</button>
            <a class="btn btn-warning btn-lg" href="#" id="btnToTop"><i class="fa fa-arrow-up"></i> Top</a>
         </div>
      </div>
   </div>
   </form>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<script>

$(document).on('click', '#btnSubmit', function () {
    alert('click');
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
                   window.location.href = "{{ url('admin/studentdetails') }}";
                 
               }
        }
     });
   });

</script>

@stop