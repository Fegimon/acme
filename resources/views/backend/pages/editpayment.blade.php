@extends('backend.default')
@section('content')
<section class="content">
   <div class="row">
      <div class="col-md-6">
         <div class="box box-danger">
            <div class="box-header">
               <h3 class="box-title">Payment Details</h3>
            </div>
            <div class="box-body">
               <!-- Date dd/mm/yyyy -->
               <form action="{{url('backend/addpaymentdetails')}}" method="post">
               {{ csrf_field() }}

               <div class="form-group">
                  <label>Payment Category</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <select class="form-control select2 accordion--form__text required"  value="{{$payrs->payment_category}}" name="payment_category" onchange="PayCategory(this);"  style="width: 100%;">
                        <option selected="selected">Select Category</option>
                        <option value="income">Income</option>
                        <option value="expense">Expense</option>
                        <option value="pay">Others</option>

                     </select>
                     </div>
                     <br>
                     <div class="form-group" id="otherpay" style="display: none;">
                        
                            
                            <input type="text" class="form-control" name="otherpay" data-mask placeholder="Other Payment Category">
                        
                        <!-- /.input group -->
                    </div>
                  
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- Date mm/dd/yyyy -->
               <div class="form-group">
               <label>User Category</label>

                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <select class="form-control select2 accordion--form__text required" value="{{$payrs->category}}" name="category" onchange="Category(this);" style="width: 100%;">
                        <option selected="selected">Select Category</option>
                        <option value="staff">Staff</option>
                        <option value="student">Student</option>
                        <option value="3">Others</option>
                     </select>
                     </div>
                     <br>
                     <div class="form-group" id="othercat" style="display: none;">
                            <input type="text" class="form-control" name="othercat" data-mask placeholder="Other User Category">
                           <br> <input type="text" class="form-control" name="newuser" data-mask placeholder="New User Name">

                    </div>
                  
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- phone mask -->
               <div class="form-group">
                  <label>Amount</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                     </div>
                     <input type="text" class="form-control" name="amount" value="{{$payrs->amount}}" data-mask>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- phone mask -->
               <div class="form-group">
                  <label>From Name:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                     </div>
                     <select class="form-control select2 accordion--form__text required" value="{{$payrs->username}}"  name="name" onchange="Newuser(this);" style="width: 100%;">
                        <option selected="selected">Select Name</option>
                        <!-- <option value="staff">Staff</option>
                        <option value="student">Student</option>
                        <option value="otheruser">Others</option> -->
                     </select>
                     </div>
                     <br>
                     <div class="form-group" id="newuser" style="display: none;">
                            <input type="text" class="form-control" name="newuser" data-mask placeholder="Other User Name">
                    </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <!-- IP mask -->
               <div class="form-group">
                  <label>Phone:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                     </div>
                     <input type="text" class="form-control" value="{{$payrs->phone}}"  name="phone">
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
               <div class="form-group">
                  <label>Payment Mode:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-laptop"></i>
                     </div>
                     <select class="form-control select2 accordion--form__text required"  value="{{$payrs->payment_method}}" name="payment_method" onchange="PayCategory(this);" style="width: 100%;">
                        <option selected="selected">Select </option>
                        <option value="cod">COD</option>
                        <option value="paypal">Paypal</option>
                        <option value="netbanking">Netbanking</option>
                     </select>
                  </div>
                  <!-- /.input group -->
               </div>
               <div class="form-group">
                  <label>Date:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <input type="text" class="form-control" value="{{$payrs->date}}" name="date">
                  </div>
                  <!-- /.input group -->
               </div>
            
            <div class="form-group">
               <label>Comments:</label>
               <div class="input-group">
                  <div class="input-group-addon">
                     <i class="fa fa-laptop"></i>
                  </div>
                  <input type="text" class="form-control" value="{{$payrs->comments}}" name="comments">
               </div>
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
<script>
   function PayCategory(that) {
   if (that.value == "pay") {
   //alert("check");
   document.getElementById("otherpay").style.display = "block";
   } else {
   document.getElementById("otherpay").style.display = "none";
   }
   }
</script>
<script>
   function Category(that) {
   if (that.value == "3") {
   //alert("check");
   document.getElementById("othercat").style.display = "block";
   } else {
   document.getElementById("othercat").style.display = "none";
   }
   }
</script>
<script>
   function Newuser(that) {
   if (that.value == "otheruser") {
   //alert("check");
   document.getElementById("newuser").style.display = "block";
   } else {
   document.getElementById("newuser").style.display = "none";
   }
   }
</script>

<script>
 $(document).ready(function() {
  $("select[name='category']").change(function(){
      var category_id = $(this).val();
      alert(category_id);
     // var token = $("input[name='_token']").val();
     var url = "{{url('categoryselect')}}";
      $.ajax({
          url: url+ '/' + category_id,
          method: 'get',
          //data: {station_id:station_id},
         
          success: function(data) {
              console.log(data.category);
            $("select[name='name'").html('<option value="">Loading.....</option>');
            $("select[name='name'").html(data.category);
          }
      });
  });
});
</script>
@stop