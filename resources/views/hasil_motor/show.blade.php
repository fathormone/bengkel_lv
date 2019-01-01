@extends('layouts.app')

@section('spesifikasi')
<h4>{{ $hasil_motor->nama }}</h4>
<p>{{ $hasil_motor->spesifikasi }}</p>
<a href="{{ route('hasil_motor.index') }}" class="btn btn-default">Kembali</a>
@endsection