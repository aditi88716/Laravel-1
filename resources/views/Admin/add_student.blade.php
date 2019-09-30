@extends("layout.admin_master")

@section("title","Add Student | Admin")
@section("student")
<div class="container">
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
                            <li><a href="#">Forms</a></li>
                            <li class="active">Advanced</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><strong>Add Student</strong><small> Form</small></div>
                <form method="post">
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="company" class=" form-control-label">Student Name</label>
                            <input type="text" name="Sname" id="company" placeholder="Enter your company name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="vat" class=" form-control-label">Mother's name:</label>
                            <input type="text" name="Mname"id="vat" placeholder="DE1234567890" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="street" class=" form-control-label">Father's name:</label>
                            <input type="text" name="Fname" id="street" placeholder="Enter street name" class="form-control">
                        </div>                            
                        <div class="form-group">
                            <label for="city" class=" form-control-label">Father's Mob:</label>
                            <input type="text" id="city" name="Fmob" placeholder="Enter your city" class="form-control">
                        </div>                           
                        <div class="form-group">
                            <label for="postal-code" class=" form-control-label">Mother's Mob:</label>
                            <input type="text" name="Mmob" id="postal-code" placeholder="Postal Code" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="country" class=" form-control-label">Class</label>
                            <input type="text" name="class" id="country" placeholder="Country name" class="form-control">
                        </div>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <input type="submit" name="submit" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection