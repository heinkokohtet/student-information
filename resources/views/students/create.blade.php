@extends('students.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Student register</h2>
            </div>
            <a class="btn btn-primary" href="{{ route('students.index') }}" style="float: right;"> Back</a>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Whoops!</strong> something we are problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif
    <form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="student name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date of Birth:</strong>
                    <input type="date" name="dob" class="form-control" placeholder="Date of Birth">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" class="form-control" placeholder="student email">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NRC:</strong>
                    <input type="text" name="nrc" class="form-control" placeholder="student nrc">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Courses :</strong>
                        <label><input type="checkbox" name="courses[]" value="Myanmar"> Myanmar</label>
                        <label><input type="checkbox" name="courses[]" value="English"> English</label>
                        <label><input type="checkbox" name="courses[]" value="Math"> Math</label>
                        <label><input type="checkbox" name="courses[]" value="Physics"> Physics</label>
                        <label><input type="checkbox" name="courses[]" value="Chemistry"> Chemistry</label>
                        <label><input type="checkbox" name="courses[]" value="Bio"> Bio</label>
                        <label><input type="checkbox" name="courses[]" value="Eco"> Eco</label>
                        
                </div>
            </div>
            
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
@endsection