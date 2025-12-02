@extends('layout.app')

@section('title', 'Edit Book')

@section('content')
<div class="max-w-3xl mx-auto py-10">

    <h2 class="text-2xl font-bold mb-6">Edit Book</h2>

    <form action="{{ route('admin.books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        @include('admin.books.form', ['book' => $book])

        <button class="px-4 py-2 bg-indigo-600 text-white rounded">Update</button>
    </form>
</div>
@endsection
