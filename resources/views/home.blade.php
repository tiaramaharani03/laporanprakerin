@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>
                        Data Absen
                    </h1>
                    
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Waktu</th>
                          <th scope="col">Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($posts as $post)
                        <tr>
                          <th scope="row">{{ $post->id }}</th>
                          <td>{{ $post->nama }}</td>
                          <td>{{ $post->waktu }}</td>
                          <td>{{ $post->keterangan }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <form method="POST" action="/absen">
                        @csrf 
                        <input type="radio" name="keterangan" id="ket1" value="Hadir">
                        <label for="ket1">hadir</label><br>
                        <input type="radio" name="keterangan" id="ket1" value="Sakit">
                        <label for="ket1">sakit</label><br>
                        <input type="radio" name="keterangan" id="ket1" value="Izin">
                        <label for="ket1">izin</label><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
