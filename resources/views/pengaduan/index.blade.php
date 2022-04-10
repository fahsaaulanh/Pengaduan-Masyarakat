@extends('layouts.sidebar')

@section('content')


<h3 class="m-4">Dashboard Pengaduan</h3>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow m-2">
                    <div class="card-header">
                        <div class="row">
                            @if(Auth::user()->role == 'masyarakat')
                            <div class="col-3">
                                <a type="button" class="btn btn-pink" href="">
                                    <i class="fa fa-plus"></i>
                                    Buat Pengaduan
                                </a>
                            </div>
                            @elseif(Auth::user()->role == 'admin')
                            <div class="col-4">
                                <a class="btn btn-orange" href="/laporan/kamar/download">
                                    <i class="fas fa-file-pdf"> </i> Download
                                </a>
                            </div>
                            @endif
                            <div class="col-6">

                            </div>
                        </div>
                    </div>


                    <div class="card-body table-responsive " style="height: 300px;">
                        <table class="table table-head-fixed table table-hover m-8">
                            <thead>
                                <th scope="col">Nik</th>
                                <th scope="col">Laporan</th>
                                <th>Bukti</th>
                                <th>Status</th>
                                @if (Auth::user()->role == 'petugas')
                                <th>
                                    aksi
                                </th>
                                @endif
                            </thead>

                            <tbody>
                                @forelse ($pengaduans as $pengaduan)
                                <tr>
                                    <td>{{ $pengaduan->nik }}</td>
                                    <td>
                                        {{$pengaduan->isi_pengaduan}}
                                    </td>
                                    <td>
                                        <img src="/storage/uploads/{{$pengaduan->foto}}" width="100" height="100" alt="">
                                    </td>
                                    <td>
                                        {{$pengaduan->status}}
                                    </td>
                                    @if (Auth::user()->role == 'petugas')
                                    <td>
                                        @if($pengaduan->status == '0')
                                        <form action="{{url('pengaduan/'.$pengaduan->id.'/status/') }}" method="post">
                                            @method('PATCH')
                                            @csrf
                                            <input type="hidden" value="proses" name="status" id="">
                                            <button class="btn btn-orange" type="submit">Validasi</button>
                                        </form>
                                        @elseif($pengaduan->status == 'proses')
                                        <form action="{{url('pengaduan/'.$pengaduan->id.'/status/') }}" method="post">
                                            @method('PATCH')
                                            @csrf
                                            <input type="hidden" value="selesai" name="status" id="">
                                            <button class="btn btn-purple" type="submit">Verifikasi</button>
                                        </form>
                                        @else
                                        <a href="#" class="btn btn-success">Selesai</a>
                                        @endif
                                    </td>
                                    @endif
                                </tr>
                                @empty
                                <td>No data...</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
