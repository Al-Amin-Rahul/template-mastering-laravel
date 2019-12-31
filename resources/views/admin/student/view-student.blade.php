@extends('admin.master')
@section('body')
<div id="content-wrapper">

        <div class="container-fluid">
        {{Session::get('message')}}
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>

            <!-- DataTables Example -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Data Table Example</div>
                <div class="card-body">
                    <h1></h1>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->phone}}</td>
                                <td>
                                    <a href="{{route('edit-student',['id'=>$student->id])}}" class="btn btn-info btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('delete-student',['id'=>$student->id])}}" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
        </div>
</div>
@endsection
