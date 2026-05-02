@extends('layouts.master')

@section('judul', 'Detail Category')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Detail Category</h5>
        <div class="mb-3">
            <label class="form-label fw-semibold">Category ID</label>
            <p>{{ $category->id }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label fw-semibold">Category Name</label>
            <p>{{ $category->name }}</p>
        </div>
        <a href="/category" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
