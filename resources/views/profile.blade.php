@extends('layaout.master')
@section('main')
<div class="container mt-5" style="height: 80vh;">
    <!-- Your other content goes here -->

    <h2>Profil Utilisateur</h2>
    <p>ID: {{ $profile->id }}</p>
    <p>Nom: {{ $profile->name }}</p>
    <p>Email: {{ $profile->email }}</p>
    <p>description: {{ $profile->bio }}</p>

    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
    </div>
@endsection
