@extends('backend.default')
@section('content')
<section class="content">
<div class="row">
        <div class="col-xs-12">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Payment Details List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S.No</th>
                    <th>Payment Category</th>
                    <th>User Category</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Phone</th>
                    <th>Payment Method</th>
                    <th>Comments</th>
                    <!-- <th>Admission Date</th> -->
                    <!-- <th>DOJ</th> -->
                    <!-- <th>School Name</th>
                    <th>School City</th>
                    <th>School Mobile</th> -->
                    <!-- <th>View</th> -->
                    <th>Edit </th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($payrs as $val)
                     <?php
                           $i=0;
                    ?>
                        <tr>
                           <td>{{++$i}}</td>
                           <td>{{ $val->payment_category}}</td>
                           <td>{{ $val->category}}</td>
                        
                           <td>{{ $val->username}}</td>
                           <td>{{ $val->amount}}</td>
                           <td>{{ $val->phone}}</td>
                           <td>{{ $val->payment_method}}</td>
                           <td>{{ $val->comments}}</td>

                        
                           <!-- <td><a href="{{ url('backend/viewstudent/'.$val->id) }}"  class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" > <i class="fa fa-edit"></i> <span>View</span></a></td> -->
                           <td><a href="{{ url('backend/editpayment/'.$val->id) }}"  class="btn btn-gradient-ibiza waves-effect waves-light m-1 .btn-small" > <i class="fa fa-edit"></i> <span>Edit</span></a></td>
                           <td><button type="button" class="btn btn-gradient-forest waves-effect waves-light m-1 delete" data-id="{{ $val->id }}" > <i class="fa fa fa-trash-o"></i> <span>Delete</span> </button></td>
                        </tr>
                        @endforeach
                
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
          </div>
          </section>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script type="text/javascript">
   $(document).ready(function() {
     $('#admission').DataTable();
   } );
</script>

<script>
 $(document).on('click','.delete',function(){
   //alert('alert');
    var $this = $(this);
    var id = $this.attr('data-id');
    var url = "{{ url('backend/deletepaymentdetail') }}"+"/"+id;
    //alert(url);
    window.location.href = url;
  });
</script>
@stop