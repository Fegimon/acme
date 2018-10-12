@extends('admin.default')
@section('content')
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">
                  <strong class="card-title">Students Admission Details</strong>
                  <a href="{{url('admin/createstudent')}}"><i class="fa fa-user-plus" aria-hidden="true" style="margin-left:700px;color:blue">Add Student</i></a>
               </div>
               <div class="card-body">
                  <table id="admission" class="table table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>S.No</th>
                           <th>Name</th>
                           <th>Student Photo</th>
                           <th>DOB</th>
                           <th>Gender</th>
                           <th>Age</th>
                           <th>Blood Group</th>
                           <th>Admission No</th>
                           <th>Admission Date</th>
                           <th>DOJ</th>
                           <th>School Name</th>
                           <th>School City</th>
                           <th>School Mobile</th>
                           <th>School Email</th>
                           <th>Edit </th>
                           <th>Delete</th>

                        </tr>
                     </thead>
                     <tbody>
                     @foreach ($studentrs as $val)
                     <?php
                           $i=0;
                    ?>
                        <tr>
                           <td>{{++$i}}</td>
                           <td>{{ $val->firstname}}</td>
                           <td><img src="{{ asset('public/upload/student/'.$val->student_image) }}" width="40px"></td>
                           <td>{{ $val->dob}}</td>
                           <td>{{ $val->gender}}</td>
                           <td>{{ $val->age}}</td>
                           <td>{{ $val->bloodgroup}}</td>
                           <td>{{ $val->admission_no}}</td>
                           <td>{{ $val->admission_date}}</td>
                           <td>{{ $val->doj}}</td>
                           <td>{{ $val->school_name}}</td>
                           <td>{{ $val->school_city}}</td>
                           <td>{{ $val->school_mobile}}</td>
                           <td>{{ $val->school_email}}</td>
                           <td><a href="{{ url('admin/editstudent/'.$val->id) }}"  class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" > <i class="fa fa-edit"></i> <span>Edit</span></a></td>
                           <td><button type="button" class="btn btn-gradient-forest waves-effect waves-light m-1 delete" data-id="{{ $val->id }}" > <i class="fa fa fa-trash-o"></i> <span>Delete</span> </button></td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- .animated -->
</div>
<!-- .content -->
<script type="text/javascript">
   $(document).ready(function() {
     $('#admission').DataTable();
   } );
</script>
@stop