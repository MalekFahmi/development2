@extends('layout.app')

@section('title', 'My Cart')

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

    <h2 class="text-3xl font-bold text-gray-800 mb-6">My Cart</h2>

    @if($cart->count() == 0)
        <p class="text-gray-600 text-lg">Your cart is empty.</p>
    @else
    <table class="w-full text-left bg-white rounded-xl shadow">
        <thead>
            <tr class="text-gray-500 text-sm uppercase border-b">
                <th class="py-3 px-4">Book</th>
                <th class="py-3 px-4">Qty</th>
                <th class="py-3 px-4">Actions</th>
            </tr>
        </thead>

        <tbody class="text-gray-700">
            @foreach ($cart as $item)
            <tr class="border-b">
                <td class="py-3 px-4">
                    <strong>{{ $item->book->title }}</strong><br>
                    <span class="text-gray-500 text-sm">{{ $item->book->author }}</span>
                </td>

                <td class="py-3 px-4">{{ $item->quantity }}</td>

                <td class="py-3 px-4 flex gap-3">

                    <!-- Increase -->
                    <form action="{{ route('cart.update', $item->book_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button class="px-3 py-1 bg-green-600 text-white rounded-lg">+1</button>
                    </form>

                    <!-- Decrease -->
                    <form action="{{ route('cart.remove', $item->book_id) }}" method="POST">
                        @csrf
                        <button class="px-3 py-1 bg-yellow-600 text-white rounded-lg">-1</button>
                    </form>

                    <!-- Delete -->
                    <form action="{{ route('cart.destroy', $item->book_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="px-3 py-1 bg-red-600 text-white rounded-lg">Remove</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

</div>
@endsection
