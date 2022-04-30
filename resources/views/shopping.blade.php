@extends('clients.layouts.app')

@section('content')
<div class="row wrapper col3">
    <div class="col-lg-12 intro">
        <div class="mb-15 flex-wrap pt-2 pb-4">
            <div class="row">
                <label class="col-lg-4 text-right">Type</label>
                <div class="col-lg-2">
                    <select class="form-control bg-secondary">
                        <option value="">--Filter by type--</option>
                    </select>
                </div>
                <label class="col-lg-1 text-right">Pricing</label>
                <div class="col-lg-2">
                    <select class="form-control bg-secondary">
                        <option value="">--Filter by price--</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card card-success card-outline">
            <div class="card-header flex-wrap border-0 pt-4 pb-0">
                <div class="card-title">
                    Tables
                </div>
                <div class="card-body">
                    <div class="mb-15">
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label> Italian Polish</label>
                                <a href="{{ route('description', 1) }}"><img src="{{ asset('dist/img/fur/table-1.jpg') }}" height="270" width="270"></a>
                            </div>
                            <div class="col-lg-3">
                                <label> Multan woods</label>
                                <a href=""><img src="{{ asset('dist/img/fur/table-2.jpg') }}" height="270" width="270"></a>
                            </div>
                            <div class="col-lg-3">
                                <label>Dinning </label>
                                <a href=""><img src="{{ asset('dist/img/fur/table-3.jpg') }}" height="270" width="270"></a>
                            </div>
                            <div class="col-lg-3">
                                <label> Hall tables</label>
                                <a href=""><img src="{{ asset('dist/img/fur/table-4.jpg') }}" height="270" width="270"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-primary float-right">More...</a>
                </div>
            </div>
        </div><!-- /.card -->
        <div class="card card-success card-outline">
            <div class="card-header flex-wrap border-0 pt-4 pb-0">
                <div class="card-title">
                    Walldrobe
                </div>
                <div class="card-body">
                    <div class="mb-15">
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label> White-Khaki</label>
                                <a href=""><img src="{{ asset('dist/img/fur/walldrobe-1.jpg') }}" height="270" width="270"></a>
                            </div>
                            <div class="col-lg-3">
                                <label>Blues Glass</label>
                                <a href=""><img src="{{ asset('dist/img/fur/walldrobe-2.jpg') }}" height="270" width="270"></a>
                            </div>
                            <div class="col-lg-3">
                                <label>Wooden all </label>
                                <a href=""><img src="{{ asset('dist/img/fur/walldrobe-3.jpg') }}" height="270" width="270"></a>
                            </div>
                            <div class="col-lg-3">
                                <label>Dimentions</label>
                                <a href=""><img src="{{ asset('dist/img/fur/walldrobe-4.jpg') }}" height="270" width="270"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-primary float-right">More...</a>
                </div>
            </div>
        </div><!-- /.card -->
        <div class="card card-success card-outline">
            <div class="card-header flex-wrap border-0 pt-4 pb-0">
                <div class="card-title">
                    Officees
                </div>
                <div class="card-body">
                    <div class="mb-15">
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label> 1</label>
                                <a href=""><img src="{{ asset('dist/img/fur/office-1.jpg') }}" height="270" width="270"></a>
                            </div>
                            <div class="col-lg-3">
                                <label>2</label>
                                <a href=""><img src="{{ asset('dist/img/fur/office-2.jpg') }}" height="270" width="270"></a>
                            </div>
                            <div class="col-lg-3">
                                <label>3 </label>
                                <a href=""><img src="{{ asset('dist/img/fur/office-3.jpeg') }}" height="270" width="270"></a>
                            </div>
                            <div class="col-lg-3">
                                <label>4</label>
                                <a href=""><img src="{{ asset('dist/img/fur/office-4.jpg') }}" height="270" width="270"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="" class="btn btn-primary float-right">More...</a>
                </div>
            </div>
        </div><!-- /.card -->
    </div><!-- /.col-md-12 -->
</div><!-- /.row -->
@endsection
