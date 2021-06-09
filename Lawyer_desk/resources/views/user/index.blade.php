@extends('user.layout.umaster')
@section('title','User Dashboard')
@section('user.layout.ucontane')


    <div class="content-wrapper">

        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
                <div class="card-header justify-content-between">
                    <h2>Activity list</h2>
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                        <tr>
                            <th>sl.</th>
                            <th class="d-none d-md-table-cell">list of application</th>
                            <th class="d-none d-md-table-cell"> Date</th>
                            <th class="d-none d-md-table-cell">Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
