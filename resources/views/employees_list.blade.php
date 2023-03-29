@extends('layouts.grocery')
@section('content')


<div class="banner">
    <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
        <div class="container">
            <h1 class="pt-5">
                Shopping Page
            </h1>
            <p class="lead">
                Save time and leave the groceries to us.
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <button id="btnLoadE" type="" class="btn btn-success btn-sm">Load employees</button>
            <br>

            <table id="tblEmployees2" class="table table-hover table-sm">
                <thead>
                
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>email</th>
                    <th>gender</th>
                    <th>Salary</th>
                    <th>Department</th>
                
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <br><br><br>
            <h5>Employees List</h4>
            <div>
                <button id="btnLoadEmployees">Load Employees</button>
                <br><br>
                <table id="tblEmployees" class="table table-bordered">
                    <thead>
                        
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>email</th>
                            <th>gender</th>
                            <th>Salary</th>
                            <th>Department</th>

                        
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <br><br><br>
            </div>
        </div>

        {{-- <div class="col-md-6 text-center">
            <br><br><br>
            <h5>Add Employee</h5>
            <form method="POST">
                @csrf
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Type First Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Type Last Name">
                </div>
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="number" class="form-control" id="salary" name="salary" placeholder="Type Salary">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Type Email">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control" placeholder="Select Gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="birth_date">Birth Date</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="Type Birth Date">
                </div>
                <div class="form-group">
                    <label for="hire_date">Hire Date</label>
                    <input type="date" class="form-control" id="hire_date" name="hire_date" placeholder="Type Hire Date">
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" id="department" name="department" placeholder="Type Department">
                </div>
                <button type="button" id="btnSendEmployee" class="btn btn-primary">Send</button>
            </form>        
        </div> --}}
    </div>
</div>
        
       


@endsection