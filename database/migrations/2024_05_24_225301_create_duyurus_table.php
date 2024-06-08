@extends('layouts.user')

@section('title', 'Home')

@section('contents')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">
            Home
        </h1>
    </div>
</header>
<hr />
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div>
                <div class="container mt-5">
                    <h1 class="mb-4">Admin Messages</h1>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                        <tr>
                            <th scope="row">{{ $message->id }}</th>
                            <td>{{ $message->baslik }}</td> <!-- Değişiklik burada -->
                            <td>{{ $message->icerik }}</td> <!-- Değişiklik burada -->
                            <td>{{ $message->created_at }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
