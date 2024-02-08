@extends('layaout.master')

@section('main')

<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <form method="POST" action="{{ route('store') }}" style="width: 50%;">
        @csrf
        <!-- Champ Name -->
        <div class="form-group mb-3">
            <label for="name" class="mb-2">Name <i class="bi bi-person-fill"></i>:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <!-- Champ Email -->
        <div class="form-group mb-3">
            <label for="email" class="mb-2">Email <i class="bi bi-envelope-fill"></i>:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Champ Password -->
        <div class="form-group mb-3">
            <label for="password" class="mb-2">Password <i class="bi bi-lock-fill"></i>:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <!-- Champ Bio -->
        <div class="form-group mb-3">
            <label for="bio" class="mb-2">Bio <i class="bi bi-card-text"></i>:</label>
            <textarea class="form-control" id="bio" name="bio" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</div>
@endsection
