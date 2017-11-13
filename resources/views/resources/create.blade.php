@extends('layouts.app')


@section('content')

    <a href="{{route('students')}}" style="margin-top: 70px;margin-bottom: 20px;" CLASS="col-lg-offset-3 col-lg-6 btn btn-default

    ">View all Students resource</a>

        <form role="form" style="" action="{{route('student.store')}}">

            {{csrf_field()}}

            <div class="box-body">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="othernames">Othernames</label>
                        <input type="text" class="form-control" name="othernames" id="othernames" placeholder="Enter othernames" required>
                    </div>
                    <div class="form-group">
                        <label for="matric">Matric No</label>
                        <input type="number" class="form-control" name="matric" id="matric" placeholder="Enter matric" required>
                    </div>
                    <div class="form-group">
                        <label for="faculty">Faculty</label>
                        <input type="text" class="form-control" name="faculty" id="faculty" placeholder="Enter faculty" required>
                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <input type="text" class="form-control" name="department" id="department" placeholder="Enter department" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary col-lg-6 col-lg-offset-3">Submit</button>
                        
                    </div>
                </div>

            </div>
        </form>
@endsection

