@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
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
            <form enctype="multipart/form-data"method="POST" action="/reviews/{{ $review->id }}">
                @csrf
                @method('PUT')
                <label for="judul">Title:</label><br>
                <input type="text" id="judul" name="judul" value="{{ $review->judul }}"><br><br>

                <label for="poster">Poster:</label><br>
                <img style="widht: 200px" src="/assets/img/{{$review->poster }}" alt="">
                <input type="file" id="poster" name="poster" value="{{ $review->poster }}"><br><br>

                <label for="review_id">review:</label><br>
                <select id="review_id" name="genre_id">
                    @foreach ($reviews as $review)
                        <option value="{{ $review->id }}" {{ $review->id == $review->review_id ? 'selected' : '' }}>{{ $review->nama }}</option>
                    @endforeach
                </select><br><br>

                <label for="negara">Country:</label><br>
                <input type="text" id="film" name="film" value="{{ $review->film }}"><br><br>

                <label for="tahun">Year:</label><br>
                <input type="text" id="tanggal" name="tanggal" value="{{ $review->tanggal }}"><br><br>

                <label for="rating">Rating:</label><br>
                <input type="text" id="rating" name="rating" value="{{ $review->rating }}"><br><br>

                <input type="submit" value="Update Review">
            </form>
        </div>
    </div>
@endsection