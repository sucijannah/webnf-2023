@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Review</li>
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
            Reviews Data
        </div>
        <div class="card-body">
            <form method="POST" action="/reviews">
                @csrf
                <div>
                    <label for="deskripsi">Film</label>
                    <input class="form control" type="text" id="user" name="user">
                </div>
                <div>
                    <label for="deskripsi">User</label>
                    <input type="number" step="0.1" min="0.1" max="10" id="rating" name="rating">
                </div>
                <div class="form-inline mb-3">
                    <label for="deskripsi">Rating</label>
                    <input class="form control" type="text" id="review" name="review">
                </div>
                <div class="form-inline mb-3">
                    <label for="deskripsi">Tanggal</label>
                    <input type="text" id="tanggal" name="tanggal">
                </div>
                <button type="submit">Add Review</button>
            </form>
        </div>
    </div>
@endsection