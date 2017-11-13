@extends('layouts.app')

@section('styles')

    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">


@endsection

@section('content')

    <a href="{{route('student.create')}}" style="margin-top: 70px;" CLASS="col-lg-offset-3 col-lg-6 btn btn-default">Add New Student resource</a>

    <div class="box-body adScroll">

        <div class="box-header col-lg-6 col-lg-offset-3">

                @include('includes.form_error')

        </div>
        <table id="example1"  class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Last Name</th>
                    <th>Othernames</th>
                    <th>Matric No</th>
                    <th>Faculty</th>
                    <th>Department</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @if($students)
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{$student->lastname}}</td>
                            <td>{{$student->othernames}}</td>
                            <td>{{$student->matric}}</td>
                            <td>{{$student->faculty}}</td>
                            <td>{{$student->department}}</td>
                            <td><a href="{{route('edit', $student->_id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                            <td><a href="{{route('student.delete', $student->_id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>
                            
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <th>S.No</th>
                    <th>Last Name</th>
                    <th>Othernames</th>
                    <th>Matric No</th>
                    <th>Faculty</th>
                    <th>Department</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
        </table>
    </div>

@endsection

@section('scripts')

    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>


    <script>
        $(function () {
            $('#example1').DataTable()

        })
    </script>

@endsection
