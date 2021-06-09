@extends('admin.layout.amaster')
@section('title','Admin Dashboard')
@section('admin.layout.acontane')

    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none">
                <div class="card-header justify-content-between">
                    <h2>Lawyer list</h2>
                    <a href="{{url('lawyerrequest')}}"><h3> Lawyer Request</h3></a>
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th class="d-none d-md-table-cell">User name</th>
                            <th class="d-none d-md-table-cell">Date</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th class="d-none d-md-table-cell">{{ $user->name }} </th>
                                <th class="d-none d-md-table-cell">{{ $user->created_at }}</th>
                                <th class="d-none d-md-table-cell"><a href="{{url('/adminlawyer/'.$user->id)}}">
                                        view</a></th>
                            </tr>
                        @endforeach
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





@endsection
