@extends('admin.layout.amaster')
@section('title','Admin Dashboard')
	@section('admin.layout.acontane')

        <p><strong>User</strong> {{$users}}</p>
        <p><strong>Active Lawyer</strong> {{$lawyers}}</p>
        <p><strong>Lawyer Request</strong> {{$requests}}</p>





	@endsection
