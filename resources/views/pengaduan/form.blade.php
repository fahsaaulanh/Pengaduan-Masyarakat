@csrf
<div class="form-group">
    <div class="form-group">
        <label for="no_daftar">No daftar</label>
        <input type="text" disabled class="form-control @error('no_daftar') is-invalid @enderror" id="no_daftar" name="no_daftar" value="{{ $no_daftar ?? '' }} {{ $registrasi->no_daftar ?? '' }}">
        @error('no_daftar')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" placeholder="Input Nama Lengkap ..." class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}{{ $registrasi->nama ?? '' }}">
        @error('nama')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label>
        <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" id="laki_laki" value="L" {{ old('jk')=='L' ? 'checked': '' }} @if (isset($registrasi)) {{ $registrasi['jk']=='L' ? 'checked': '' ?? '' }} @endif>
                <label class="form-check-label" for="laki_laki">Laki-Laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" id="perempuan" value="P" {{ old('jk')=='P' ? 'checked' : '' }} @if (isset($registrasi)) {{ $registrasi['jk']=='P' ? 'checked' : '' }} @endif>
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
            @error('jk')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="textarea" class="form-control @error('alamat') is-invalid @enderror" placeholder="Input Alamat" id="alamat" name="alamat" value="{{old('alamat')}}{{ $registrasi->alamat ?? '' }}">
        @error('alamat')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="agama">Agama</label>
        <select name="agama" class="custom-select" id="">
            <option value="">-Pilih Agama-</option>
            @foreach ($agamas as $agama)
            <option value="{{$agama}}" {{ old('agama')==$agama ? 'selected' : '' }} @if (isset($registrasi)) {{ $registrasi['agama']==$agama ? 'selected' : '' }} @endif>{{$agama}}</option>
            @endforeach
        </select> @error('agama')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="asal_smp">Asal SMP</label>
        <input type="textarea" class="form-control @error('asal_smp') is-invalid @enderror" placeholder="Input Asal SMP" id="asal_smp" name="asal_smp" value="{{old('asal_smp')}}{{ $registrasi->asal_smp ?? '' }}">
        @error('asal_smp')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <select name="jurusan" class="custom-select" id="">
            <option value="">-Pilih jurusan-</option>
            @foreach ($jurusans as $jurusan)
            <option value="{{$jurusan}}" {{ old('jurusan')==$jurusan ? 'selected' : '' }} @if (isset($registrasi)) {{ $registrasi['jurusan']==$jurusan ? 'selected' : '' }} @endif>{{$jurusan}}</option>
            @endforeach
        </select> @error('jurusan')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

</div>
