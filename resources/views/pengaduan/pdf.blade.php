<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">

    <title>Document</title>
    <style>
        @page {
            margin: 10px;
        }

        body {
            margin: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table tr th {
            border: 1px solid black;
            background: #c5c5c5;
            padding: 5px;
        }

        table tr td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Laporan Data Registrasi</h1>
    <table style="width: 100%;">
        <thead>
            <tr class="table">
                <th scope="col">No daftar</th>
                <th style="width: 100px;">Nama</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th colspan="1">Alamat</th>
                <th>Asal SMP</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($registrasis as $registrasi)
            <tr class=" table-hover">
                <td>{{ $registrasi->no_daftar}}</td>
                <td>{{ $registrasi->nama}} </td>
                <td>{{ $registrasi->jk}}</td>
                <td>{{ $registrasi->agama}}</td>
                <td>{{ $registrasi->alamat}}</td>
                <td>{{ $registrasi->asal_smp}}</td>
                <td>{{ $registrasi->jurusan}}</td>
            </tr>
            @empty
            <td colspan="6" class="text-center">No data...</td>
            @endforelse
        </tbody>
    </table>
</body>

</html>
