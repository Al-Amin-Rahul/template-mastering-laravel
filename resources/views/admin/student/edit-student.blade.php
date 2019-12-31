@extends('admin.master')
@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="row col-md-6 offset-md-2">
                </div>
                <form action="{{route('update-student')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{$student->name}}" class="form-control form-control-lg" id="colFormLabelLg">
                            <input type="hidden" name="id" value="{{$student->id}}" class="form-control form-control-lg" id="colFormLabelLg">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{$student->email}}" class="form-control form-control-lg" id="colFormLabelLg">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Phone</label>
                        <div class="col-sm-10">
                            <input type="number" name="phone" value="{{$student->phone}}" class="form-control form-control-lg" id="colFormLabelLg">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 offset-md-2">
                            <input type="submit" name="addStudent" value="Update Student" class="btn btn-block btn-outline-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

