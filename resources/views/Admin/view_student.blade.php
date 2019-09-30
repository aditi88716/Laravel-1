@extends("layout.admin_master")

@section("title","View Student | Admin")

@section("view_student")
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
                                <strong class="card-title">View Student</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Mother's Name</th>
                                            <th scope="col">Father's Name</th>
                                            <th scope="col">Father's Mob</th>
                                            <th scope="col">Mother's Mob</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td>aditi</td>
                                            <td>sharma</td>
                                            <td>bindiya</td>
                                            <td>aditi</td>
                                            <td>sharma</td>
                                            <td>bindiya</td>
                                            <td>sharma</td>
                                            <td>bindiya</td>
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