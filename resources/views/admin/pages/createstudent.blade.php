@extends('admin.default')
@section('content')
<div class="container">
<div id="accordion">
    

	<!-- <div class="jumbotron">


<div class="container">
      <h2 class="text-success"><b>Addmission Detail</b></h2>
</div>
<div class="form-group">
                        <select name="role_id" class="form-control">
                            <option value="volvo">Select Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Staff</option>
                            <option value="3">Student</option>
                        </select>
                        </div>

              <div class="row">
                  <div class="col-md-3 col-lg-4">
                      <div class="form-group">
                          <label class="control-label">Admission Number</label>
                          <input type="text" class="form-control" />
                      </div>
                  </div>
                  
                  
                     <div class="col-md-3 col-lg-4">
                      <div class="form-group">
                          <label class="control-label">Admission Date</label>
                          <input type="text" class="form-control" />
                      </div>
                  </div>
                  
                  

                  <div class="col-md-4 col-lg-4">
                      <div class="form-group">
                          <label class="control-label">Date Of Joining</label>
                          <input type="text" class="form-control" />
                      </div>
                  </div>

                 
              </div>

              

              <div class="row">
                  <div class="col-md-3 col-lg-4">
                      <div class="form-group">
                          <label class="control-label">School/Organization Address</label>
                          <input type="text" class="form-control" />
                      </div>
                  </div>
                  <div class="col-md-5 col-lg-3">
                      <div class="form-group">
                          <label class="control-label">City</label>
                          <input type="text" class="form-control" />
                      </div>
                  </div>
                  <div class="col-md-4 col-lg-3">
                      <div class="form-group">
                          <label class="control-label">State</label>
                          <input type="text" class="form-control" />
                      </div>
                  </div>
                  <div class="col-md-4 col-lg-2">
                      <div class="form-group">
                          <label class="control-label">Zip Code</label>
                          <input type="text" class="form-control" />
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-4 col-lg-5">
                      <div class="form-group">
                          <label class="control-label">Contact Information:(Phone Number)</label>
                          <input type="text" class="phone form-control" />
                      </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                      <label class="control-label">Email</label>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          <input type="text" class="form-control" />
                      </div>
                  </div>
                  <div class="col-md-4 col-lg-3">
                      <div class="form-group">
                          <label class="control-label">Image</label>
                          <input type="file" class="" />
                      </div>
                  </div>

                 
              </div>

              </div> -->
              
	
<div class="jumbotron">


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
                            <input type="text"  name="email "class="form-control" pattern="[a-zA-Z0-9]{0,}[@]{1}[a-zA-Z]{10}[.]{1}[a-zA-Z]{3}s" title="Please enter valid email id "/>
                        </div>
                    </div>
					
					
                    <div class="col-md-2 col-lg-3">
                        <div class="form-group">
                            <label class="control-label">City</label>
                            <input type="text" name="city" class="form-control" pattern="[a-zA-Z]{0,30}"  title="city should only contain letters" />
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                            <label class="control-label">State</label>
                            <input type="text" class="form-control" name=" state" pattern="[a-zA-Z]{0,30}" title="State should only contain letters"  />
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-2">
                        <div class="form-group">
                            <label class="control-label">Zip Code</label>
                            <input type="text" class="form-control"  pattern="[0-9]{0,}" maxlength="6" title="Please enter six digit pincode"  />
                        </div>
                    </div>
                </div>

                <div class="row">
				  <div class="col-md-3 col-lg-4">
                        <div class="form-group">
                        <label class="control-label">Gender</label>
                        <select name="" class="form-control">
                            <option value="volvo">select</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                          
                        </select>
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
                            <label class="control-label">Qualification</label>
                            <input type="text" class="form-control" name=" bloodgroup" required  />
                        </div>
                    </div>
					<div class="col-md-4 col-lg-2">
					           <div class="form-group">
					                 <label>Experience</label>	<br>				   
							           <input type ="text" name="hi" value="">
								</div>
						</div>
					
						
						 
						 <div class="col-md-8 col-lg-8">
					           <div class="form-group">
					                 <label> Upload Photo</label>	<br>				   
							           <input type="file" name="fileupload" value="fileupload" id="fileupload">
								</div>
						</div>
						
                     
                  
                    
                						

                       
                </div>
				
				</div>
				
				
				
				
            </div>`
        </div>
    </div>	
				<!-- <div class="jumbotron">

  <div class="container">
        <h2 class="text-success"><b>Personel Details</b></h2>
</div>
		
  
                <div class="row">
                    <div class="col-md-3 col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Father Name</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Mother Name</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Designation</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-2 col-lg-3">
                        <div class="form-group">
                            <label class="control-label">Position</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                            <label class="control-label">Department</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Organization</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-3 col-lg-4">
                        <div class="form-group">
                            <label class="control-label">Organization Address</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="form-group">
                            <label class="control-label">City</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="form-group">
                            <label class="control-label">State</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="form-group">
                            <label class="control-label">Zip Code</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                </div>

                <div class="row">
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
                </div>
 </div> -->



<div class="row">
    <div class="col-lg-12">
        <div class="pull-right">
            <a href="#" class="btn btn-success btn-lg" id="btnSubmit"><i class="fa fa-save"></i> Save</a>
            <a class="btn btn-warning btn-lg" href="#" id="btnToTop"><i class="fa fa-arrow-up"></i> Top</a>
        </div>
    </div>
</div>
</div>

@stop