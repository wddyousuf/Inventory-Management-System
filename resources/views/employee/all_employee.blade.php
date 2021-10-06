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
            <div class="panel-heading"><h3 class="panel-title pull-left">Employee List</h3>
                <a href="{{ route('employee.add') }}" class="btn btn-info pull-right" style="margin-bottom: 10px;"><i class="md md-add-circle md-xs"></i> Add Employee</a>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered table-responsive text-center">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Name</th>
                                    {{--  <th>Email</th>  --}}
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Experience</th>
                                    <th>Salary</th>
                                    <th>Status</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($employee as $key => $item)
                                <tr class="{{ $item->id }}">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    {{--  <td>{{ $item->email }}</td>  --}}
                                    <td>{{ $item->number }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->city }}</td>
                                    <td>{{ $item->experience }}</td>
                                    <td>{{ $item->salary }}</td>
                                    <td>{{ ($item->status == '1')?'Active':'Inactive' }}</td>
                                    <td><img src="{{ (!empty($item->photo))? url('backend/upload/employee_photos/'.$item->photo): url('backend/upload/noImage.jpg')}}"
                                        alt="{{ $item->name }}" style="height: 50px; width:50px;"></td>
                                    <td>
                                        <a href="{{ route('employee.edit',$item->id) }}" class="btn btn-primary btn-xs" title="Edit"><i class="md md-edit"></i></a>
                                        <a href="{{ route('employee.delete') }}" class="btn btn-danger btn-xs" title="Delete" id="delete" data-token="{{ csrf_token() }}" data-id="{{ $item->id }}"><i class="md md-delete"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div> <!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col -->


        <script src="{{asset('/backend')}}/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="{{asset('/backend')}}/assets/datatables/dataTables.bootstrap.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>
@endsection
