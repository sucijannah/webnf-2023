@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Genres Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genres</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Data
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data"method="POST" action="/genres/{{ $genre->id }}">
                @csrf
                @method('PUT')
                <label for="judul">Title:</label><br>
                <input type="text" id="judul" name="judul" value="{{ $genre->judul }}"><br><br>

                <label for="poster">Poster:</label><br>
                <img style="widht: 200px" src="/assets/img/{{$genre->poster }}" alt="">
                <input type="file" id="poster" name="poster" value="{{ $genre->poster }}"><br><br>

                <label for="genre_id">Genre:</label><br>
                <select id="genre_id" name="genre_id">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" {{ $genre->id == $genre->genre_id ? 'selected' : '' }}>{{ $genre->nama }}</option>
                    @endforeach
                </select><br><br>

                <label for="genre">Country:</label><br>
                <input type="text" id="genre" name="genre" value="{{ $genre->genre }}"><br><br>

                <label for="deskripsi">Year:</label><br>
                <input type="text" id="deskripsi" name="deskripsi" value="{{ $genre->deskripsi }}"><br><br>

                <input type="submit" value="Update Genre">
            </form>
        </div>
    </div>
@endsection