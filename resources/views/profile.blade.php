@extends('layaout.master')

@section('main')
    <div class="container mt-5">
        <!-- Your other content goes here -->

        <h2>Profil Utilisateur</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Bio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profile as $livre)
                    <tr>
                        <td>{{ $livre['id'] }}</td>
                        <td>{{ $livre['name'] }}</td>
                        <td>{{ $livre['email'] }}</td>
                        <td>{{ $livre['bio'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Your other content goes here -->
    </div>

    <div class="container">
        <form method="POST" action="{{ route('store') }}">
            @csrf
            <!-- Champ Name -->
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <!-- Champ Email -->
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <!-- Champ Password -->
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" id="password" name="password" required>
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
