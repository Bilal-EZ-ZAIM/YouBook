@extends('layaout.master')
@section('main')
    <h1> je suis my livers page </h1>
    <div class="container">
        <form method="POST" action="{{ route('store') }}">
            @csrf
            <!-- Champ Name -->
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <!-- Champ Bio -->
            <div class="form-group">
                <label for="bio">Bio :</label>
                <textarea class="form-control" id="bio" name="bio" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>
@endsection
