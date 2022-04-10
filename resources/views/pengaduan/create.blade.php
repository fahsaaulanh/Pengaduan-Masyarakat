@extends('layout.layouts')

@section('content')

<!-- Content Wrapper (Page Content) -->
<div class="content-wrapper">
    <!-- Content Header (Page Header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-8">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item "><a href="/registrasi">Registrasi</a></li>
                        <li class="breadcrumb-item active">Input Registrasi</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h4>Input Registrasi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('registrasi.store') }}" method="post">
                                @include('registrasi.form')
                                <button type="submit" class="btn btn-info m-2 float-right text-white">Tambah</button>
                                <a href="{{url('/registrasi') }}" class=" btn btn-danger m-2 ">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>




@endsection
