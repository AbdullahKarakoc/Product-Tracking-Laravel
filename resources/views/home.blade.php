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
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96 text-xl p-6">
                Welcome to the home page. If you want to see the Product List, please log in with your user account.
            </div>
        </div>
    </div>
</main>
@endsection
