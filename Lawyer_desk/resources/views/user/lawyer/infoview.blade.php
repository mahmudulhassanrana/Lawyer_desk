@extends('user.layout.umaster')
@section('title','Lawyer list')
@section('user.layout.ucontane')
    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
                <div class="card-header justify-content-between">
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <h3>Details for {{$user->name}}</h3>

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
