@extends('layouts.layout')
@section('title', 'Edit')
@section('content')
    <div class = "form">
        <div class="row">
            <div class = "content">
                <div class = "items">
                    <h3>Edit {{ $Employee['EmployeeNumber']}}</h3>
                    <form action = /Employee/ method="POST">
                    @csrf
                        <div class = "col-md-12">
                            <input class = "form-control" type="text" name="EmployeeNumber" id="EmpNumber" value="<?php echo $Employee['EmployeeNumber'] ?>">
                        </div>
                        <div class = "col-md-12">
                            <input class = "form-control" type="text" name="FirstName" id="FirstName" value="<?php echo $FirstName['FirstName'] ?>">
                        </div>
                        <div class = "col-md-12">
                            <input class = "form-control" type="text" name="LastName" id="LastName" value="<?php echo $LastName['LastName'] ?>">
                        </div>
                        <div class = "col-md-12">
                            <p><b>Birthday:</b></p>
                            <input class = "form-control" type="date" name="Birthday" id="Birthday" value="<?php echo $Birthday['Birthday']?>">
                        </div>
                        <div class = "col-md-12">
                            <p><b>Gender</b></p>
                            <input class = "form-control" type="date" name="Gender" id="Birthday" value="<?php echo $Gender['Gender']?>">
                        </div>
                        <div class = "form-button mt-3">
                            <button id="submit" type="submit" value="add" class = "btn btn-primary">Update Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection