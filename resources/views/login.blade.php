@extends('layaout.master')

@section('main')

<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <form method="POST" action="{{ route('login') }}" style="width: 50%;">
        @csrf
        

        <div class="form-group mb-3">
            <label for="email" class="mb-2">Email <i class="bi bi-envelope-fill"></i>:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group mb-3">
            <label for="password" class="mb-2">Password <i class="bi bi-lock-fill"></i>:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
</div>
@endsection
