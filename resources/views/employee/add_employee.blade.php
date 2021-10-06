@extends('layouts.master')
@section('content')
<style>
    span.error{
       display: inline-block;
       max-width: 80%;
       margin-bottom: 5px;
       font-weight: 700;
       margin-left: 18%;
   }
</style>
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title pull-left">
                    @if (isset($employee))
                        Update Employee
                    @else
                    Add Employee
                    @endif
                </h3>
                <a href="{{ route('employee.view') }}" class="btn btn-info pull-right" style="margin-bottom: 10px;"><i class="md md-view-list md-xs"></i> All Employee</a>
            </div>
            <div class="col-md-8 col-md-offset-2">
                @error('email')
                      <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>{{ $message }}</strong>
                        </div>
                      @enderror
            </div>
            <div class="panel-body">
                <div class=" form">
                    <form class="cmxform form-horizontal tasi-form" id="quickForm" method="POST" action="{{ (@$employee)?route('employee.update',@$employee->id) : route('employee.store') }}" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                        <div class="form-group ">
                            <label for="name" class="control-label col-lg-2">Name *</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="name" name="name" type="text" value="{{ (@$employee)?@$employee->name : '' }}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-2">Email *</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="email" name="email" type="email" value="{{ (@$employee)?@$employee->email : '' }}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="number" class="control-label col-lg-2">Mobile No *</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="number" name="number" type="text" value="{{ (@$employee)?@$employee->number : '' }}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Address *</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="address" name="address" type="text" value="{{ (@$employee)?@$employee->address : '' }}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="city" class="control-label col-lg-2">City *</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="city" name="city" type="text" value="{{ (@$employee)?@$employee->city : '' }}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="experience" class="control-label col-lg-2">Experience *</label>
                            <div class="col-lg-10">
                                <select name="experience" id="experience" class="form-control">
                                    <option value="">Select Experience</option>
                                    <option value="0" {{ (@$employee->experience=='0')?'selected':'' }}>Fresher</option>
                                    <option value="<1" {{ (@$employee->experience=='<1')?'selected':'' }}>Under 1 Year</option>
                                    <option value="2-4" {{ (@$employee->experience=='2-4')?'selected':'' }}>2-4 Years</option>
                                    <option value=">5" {{ (@$employee->experience=='>5')?'selected':'' }}>Above 5 Years</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="salary" class="control-label col-lg-2">Salary *</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="salary" name="salary" type="number" value="{{ (@$employee)?@$employee->salary : '' }}">
                            </div>
                        </div>
                        @if (!isset($employee))
                        <div class="form-group ">
                            <label for="password" class="control-label col-lg-2">Password *</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="password" name="password" type="password">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="confirm_password" class="control-label col-lg-2">Confirm Password *</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="confirm_password" name="confirm_password" type="password">
                            </div>
                        </div>
                        @endif

                        <div class="form-group ">

                            <label for="photo" class="control-label col-lg-2">Photo *</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="photo" name="photo" type="file">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="form-group col-lg-2">
                                <img src="{{ (!empty(@$employee->photo))? url('backend/upload/employee_photos/'.@$employee->photo): url('backend/noImage.jpg')}}" id="showImage" style="height: 150px; width: 150px; border: 1px solid black; margin-left:15px;" alt="">
                            </div>
                            <div class="col-lg-offset-2 col-lg-8">
                                <button class="btn btn-success waves-effect waves-light" type="submit">
                                    @if (isset($employee))
                                        Update
                                    @else
                                     Save
                                    @endif
                                </button>
                                <button class="btn btn-default waves-effect" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- .form -->

            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col -->


    <script>
        $(document).ready(function(){
            $('#photo').change(function(e){
                var reader =new FileReader();
                reader.onload=function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script src="{{asset('/backend')}}/assets/jquery-validation/additional-methods.min.js"></script>
    <script>
        $(function () {

          $('#quickForm').validate({
            rules: {
                name: "required",
                number: "required",
                city: "required",
                experience: "required",
                salary: "required",
                photo: "required",
                password: {
                    required: true,
                    minlength: 6
                },
                confirm_password: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                address: "required"
            },
            messages: {
                name: "Please enter Name",
                number: "Please enter Phone Number",
                city: "Please enter City",
                experience: "Please Select Experience",
                salary: "Please enter Salary Amount",
                number: "Please Select Photo",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 6 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 6 characters long",
                    equalTo: "Please enter the same password as above"
                },
                email: "Please enter a valid email address",
                address: "Address is required"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
            }
          });
        });
        </script>
@endsection
