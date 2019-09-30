@extends("layout.admin_master")

@section("title","View Teacher | Admin")

@section("view_teacher")
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

         <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">View Teacher</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Teacher's name</th>
                                            <th scope="col">Eamil Address</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">Qualification</th>
                                            <th scope="col">Subject chosen</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td>teacher1</td>
                                            <td>teacher2</td>
                                            <td>teacher3</td>
                                            <td>teacher4</td>
                                            <td>teacher5</td>
                                            <td>teacher6</td>
        
                                            <td>teacher7</td>

                                            <td>teacher8</td>
                                        </tr>
                                        
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection