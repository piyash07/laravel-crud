@extends('layout')
@section('content')

	<div class="col-12 col-lg-6 grid-margin">
        <div class="card">
           <div class="card-body">
               <h2 class="card-title">Add Student</h2>
               <form class="forms-sample" method="post" action="{{URL::to('/addstudent')}}" enctype="multipart/form-data">
                   {{ csrf_field() }}
                   <div class="form-group">
                       <label for="exampleInputEmail1">Student Name</label>
                       <input type="text" class="form-control p-input" name="Student_name" aria-describedby="emailHelp" placeholder="Enter Student name">
                   </div>
                   <div class="form-group">
                       <label for="exampleInputPassword1">Student Roll</label>
                       <input type="text" class="form-control p-input" name="student_roll" placeholder="Enter student roll">
                   </div>

                   <div class="form-group">
                       <label for="exampleInputPassword1">Student Father's Name</label>
                       <input type="text" class="form-control p-input" name="student_FatherName" placeholder="Enter student Father's name">
                   </div>

                   <div class="form-group">
                       <label for="exampleInputPassword1">Student Mother's Name</label>
                       <input type="text" class="form-control p-input" name="student_motherName" placeholder="Enter student mother's name">
                   </div>

                   <div class="form-group">
                       <label for="exampleInputPassword1">Student Email</label>
                       <input type="email" class="form-control p-input" name="student_email" placeholder="Enter student email">
                   </div>

                   <div class="form-group">
                       <label for="exampleInputPassword1">Student Phone</label>
                       <input type="text" class="form-control p-input" name="student_phone" placeholder="Enter student phone">
                   </div>
                  
                  <div class="form-group">
                       <label for="exampleInputPassword1">Student Address</label>
                       <input type="text" class="form-control p-input" name="student_address" placeholder="Enter student address">
                   </div>

                   <div class="form-group">
                       <label for="exampleInputPassword1">Student Password</label>
                       <input type="password" class="form-control p-input" name="student_password" placeholder="Enter student password">
                   </div>

                   <div class="form-group">
                       <label>Upload file</label>
                    <div class="row">
                    <div class="col-12">
                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Images</label>
                      <input type="file" class="form-control-file" name="student_images" id="exampleInputFile2" aria-describedby="fileHelp">
                      <small id="fileHelp" class="form-text text-muted">This is some 
                      placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                    </div>
                  </div>
                </div>

                   <div class="form-group">
                      <label for="exampleInputPassword1">Student AdmissionYear</label>
                      <input type="date" class="form-control p-input" name="student_admissionYear" placeholder="Enter student admissionYear">
                   </div>

                   <div class="form-group">
                   	<label for="exampleInputPassword1">Student department</label>
                   	<select class="form-control p-input" name="student_department">
                   		<option value="1">SWE</option>
                   		<option value="2">CSE</option>
                   		<option value="3">EEE</option>
                   		<option value="4">ETE</option>
                   		<option value="5">BBA</option>
                   		<option value="6">MBA</option>
                   	</select>
                   </div>
               <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
          </div>
       </div>
   </div>


@endSection
