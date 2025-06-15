@extends('base')
@section('title', 'Student Lists')

<div>
    @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><strong>Student Lists</strong></h4>
                        <button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#createNewStd">Create New Student</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Student Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $std)
                                <tr>
                                    <td>{{ $std->id }}</td>
                                    <td>{{ $std->name }}</td>
                                    <td>{{ $std->age }}</td>
                                    <td>{{ $std->gender }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
