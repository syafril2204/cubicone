@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <!--  Row 1 -->

    <div class="card">
        <div class="card-body">
            <h6 class="fw-semibold fs-6 p-2">Gambar Homepage</h6>
            <div class="row">
                <div class="col-sm-6 col-xl-6">
                    <div class="card overflow-hidden rounded-2">
                        <div class="position-relative">
                            <a href="javascript:void(0)"><img src="" class="card-img-top rounded-0" alt="..."></a>

                        </div>
                        <div class="card-body pt-3 p-4">

                            <a href="?proses=tambah_home" class="btn btn-primary">Ganti</a>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

@endsection
