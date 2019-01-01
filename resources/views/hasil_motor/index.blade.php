@extends('layouts.app')

@section('spesifikasi')
    <a href="{{ route('hasil_motor.create') }}" class="btn btn-info btn-sm">Hasil Motor Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Nama Motor</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($hasil_motors as $hasil_motor)
                <tr>
                    <td>{{ $hasil_motor->id }}</td>
                    <td><a href="{{ route('hasil_motor.show', $hasil_motor->id) }}">{{ $hasil_motor->nama }}</a></td>
                    <td>
                        <form action="{{ route('hasil_motor.destroy', $hasil_motor->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('hasil_motor.edit', $hasil_motor->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection