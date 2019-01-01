@extends('layouts.app')

@section('spesifikasi')
<h4>Hasil Motor Baru</h4>
<form action="{{ route('hasil_motor.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label for="title" class="control-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama">
        @if ($errors->has('nama'))
            <span class="help-block">{{ $errors->first('nama') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('spesifikasi') ? 'has-error' : '' }}">
        <label for="content" class="control-label">Spesifikasi</label>
        <textarea name="spesifikasi" cols="30" rows="5" class="form-control"></textarea>
        @if ($errors->has('spesifikasi'))
            <span class="help-block">{{ $errors->first('spesifikasi') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('hasil_motor.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection