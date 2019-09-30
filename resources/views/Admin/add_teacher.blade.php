@extends("layout.admin_master")

@section("title","Add Teacher | Admin")

@section("add_teacher")
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
            <div class="card-header">
                <strong>Add Teacher</strong>
                <small> Form</small>
            </div>
            <form method="post">
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="company" class=" form-control-label">Teacher Name</label>
                        <input type="text" name="tname" id="company" placeholder="Enter your company name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="vat" class=" form-control-label">Email Address:</label>
                        <input type="text" name="email"id="vat" placeholder="DE1234567890" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="street" class=" form-control-label">Mobile Number:</label>
                        <input type="text" name="mob" id="street" placeholder="Enter street name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="city" class=" form-control-label">Qualification</label>
                        <input type="text" id="city" name="qualification" placeholder="Enter your city" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="postal-code" class=" form-control-label">Subject:</label>
                        <input type="text" name="sub" id="postal-code" placeholder="Postal Code" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="country" class=" form-control-label">Class</label>
                        <input type="text" name="class" id="country" placeholder="Country name" class="form-control">
                    </div>
                    <input type="submit" name="submit" class="btn btn-info">
                </div>
            </form>
        </div>
    </div><!--breadcrum-->
</div><!--container-->
@endsection