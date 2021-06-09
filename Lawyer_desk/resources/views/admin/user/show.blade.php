@extends('admin.layout.amaster')
@section('title','Admin Dashboard')
@section('admin.layout.acontane')


    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
                <div class="card-header justify-content-between">
                    <h2>User Details</h2>
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <h2>Details for {{$user->name}}</h2>

                        <form action="{{url('/adminuser/'.$user->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <p><strong>Name</strong> {{$user->name}}</p>
                                <p><strong>Email</strong> {{$user->email}}</p>
                                <p><strong>Address</strong> {{$user->address}}</p>
                                <p><strong>Phone</strong> {{$user->phone}}</p>
                            </div>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </div>






@endsection
