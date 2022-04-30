@extends('admins.layouts.app')

@section('page-title')
<title>FurnitureSite</title>
@endsection

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-4">
          <h1 class="m-0">New Item</h1>
        </div>
        <div class="col-sm-4">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin-dashboard') }}">Admin</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/item') }}">Items</a></li>
            <li class="breadcrumb-item active">Create</li>
          </ol>
        </div>
        <div class="col-sm-4">
          <a href="{{ route('item.index') }}" class="btn btn-secondary float-sm-right">
            <i class="fa fa-arrow-left"></i>
            &nbsp;&nbsp;&nbsp;Back
          </a>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
<div class="card card-primary card-outline">
    <form method="POST" action="{{ route('item.store') }}" enctype="multipart/form-data">
        @csrf
        @include('admins.items.fields')
    </form>
</div>
@endsection
