@extends('lawyer.layout.lmaster')
@section('title','Creat dairy')
@section('lawyer.layout.lcontane')

    <div class="row justify-content-center">

        <form>
            <h2 style="text-align: center;">Case Dairy</h2>
            <br>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-bookmark"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Case type" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Victim Full Name" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Email address" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="victim Address" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-address-card"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="victim NID number" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="victim Phone Number" type="text">
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Full details for case" type="text">
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Date of case" type="text">
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-comment"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="victim comment for self defence " type="text">
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-file"></i> </span>
                </div>
                <input name="" class="form-control" type="file" accept="image/*,.pdf">
            </div>
            <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Create</button>
            </div> <!-- form-group// -->
        </form>

    </div>

@endsection
