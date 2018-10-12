@extends('admin.default')
@section('content')
<div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Basic Form</strong> Elements
                      </div>
                      <div class="card-body card-block">
                      <h4>Students Details</h4><br>
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">First Name</label></div>
                            <div class="col-12 col-md-9">
                              <p class="form-control-static">{{$studentrs->firstname}}</p>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Last Name</label></div>
                            <div class="col-12 col-md-9"><p class="form-control-static">Username</p></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email Input</label></div>
                            <div class="col-12 col-md-9"><p class="form-control-static">Username</p></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><p class="form-control-static">Username</p></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Disabled Input</label></div>
                            <div class="col-12 col-md-9"><p class="form-control-static">Username</p></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Textarea</label></div>
                            <div class="col-12 col-md-9"><p class="form-control-static">Username</p></div>
                          </div>
                          
                         
                          
                          
                        </form>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>

@stop