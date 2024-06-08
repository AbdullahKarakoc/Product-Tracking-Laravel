@extends('layouts.app')

@section('title', 'Laravel 10 Login SignUp with User Roles and Permissions with Admin CRUD | Tailwind CSS Custom Login register')

@section('contents')
    <div>
        <h1 class="font-bold text-2xl ml-3">Announcement</h1>

        <div class="mt-5 p-5 bg-white rounded shadow">
            <h2 class="font-semibold text-lg mb-3">Send Messages</h2>
            <form action="{{ route('admin/mesaj') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="baslik" class="block text-sm font-medium text-gray-700">Header:</label>
                    <input type="text" id="baslik" name="baslik" class="mt-1 p-2 border rounded-md w-full">
                </div>
                <div class="mb-4">
                    <label for="icerik" class="block text-sm font-medium text-gray-700">Content:</label>
                    <textarea id="icerik" name="icerik" class="mt-1 p-2 border rounded-md w-full"></textarea>
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Submit</button>
            </form>
        </div>
    </div>
@endsection
