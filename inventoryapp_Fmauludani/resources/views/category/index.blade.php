@extends('layouts.master')

@section('judul', 'Tampil Category')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Tampil Category</h5>
        <a href="/category/create" class="btn btn-primary mb-3">Tambah</a>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">#</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $key => $category)
                    <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $key + 1 }}</h6></td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{ $category->name }}</p>
                        </td>
                        <td class="border-bottom-0">
                            <form action="/category/{{ $category->id }}" method="POST">
                                <a href="/category/{{ $category->id }}" class="btn btn-sm btn-info" style="background-color: #6f42c1; border-color: #6f42c1; color: white;">Detail</a>
                                <a href="/category/{{ $category->id }}/edit" class="btn btn-sm btn-info">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">Data masih kosong</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
