@extends('layouts.app')

@section('home')
<section class="home" id="home">

    <div class="content">
        <h3>Web <span>Pengaduan Masyarakat</span></h3>
        <p>Web ini dibuat untuk menampung laporan dari masyarakat Lorem ipsum dolor sit amet.</p>
        <a href="#contact" class="btn btn-pink">Isi Laporamu</a>
    </div>

    <div class="image">
        <img src="{{ asset('pengaduan_masyarakat/images/contact-img.png') }}" alt="">
    </div>

</section>
@stop

@section('form')
<section class="contact" id="contact">

    <div class="image">
        <img src="{{ asset('pengaduan_masyarakat/images/contact-img.png') }}" alt="">
    </div>

    <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="heading">Kirim Laporan</h1>

        <div class="inputBox">
            <input type="text" name="nik" required>
            <label>NIK</label>
        </div>

        <div class="inputBox">
            <input type="text" name="name" required>
            <label>Nama</label>
        </div>


        <div class="inputBox">
            <input type="email" name="email" required>
            <label>Email</label>
        </div>

        <div class="inputBox">
            <textarea required name="isi_pengaduan" id="" cols="30" rows="10"></textarea>
            <label>Laporan</label>
        </div>

        <div class="inputBox">
            <input type="file" name="foto" required>
        </div>



        <button type="submit" class="btn" value="send message">Kirim</button>

    </form>

</section>
@stop
