@extends('students.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left text-center">
                <h3>student list</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Create Student</a>
            </div><br>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <span>{{ $message }}</span>
    </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Date of birth</th>
            <th>Email</th>
            <th>NRC</th>
            <th>Courses</th>
            
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->dob }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->nrc }}</td>
            <td>@foreach($student->courses as $courses)
                <p>{{$courses}}</p>
            @endForeach</td>
            </td>
        </tr>
        @endforeach
    </table>
{!! $students->links() !!}
@endsection