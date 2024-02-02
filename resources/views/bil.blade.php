@extends('layaout.master')
@section('main')
    <div class="container mt-5">

        <div class="hero-section text-center d-flex align-items-center" style="height: 80vh; background-color: #f0f0f0;">
            <div class="container">
                <h1 class="mb-4">Bienvenue à l'école YouBook</h1>
                <p class="lead">Découvrez un nouveau monde de connaissances avec l'application conviviale de l'école
                    YouBook.</p>
            </div>
        </div>
        <div>
            <h2>Liste des livres disponibles</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($livres as $livre)
                        <tr>
                            <td>{{ $livre['id'] }}</td>
                            <td>{{ $livre['name'] }}</td>
                            <td>{{ $livre['description'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h2>Emprunter un livre</h2>
            </div>
            <div class="card-body">
                <button class="btn btn-primary" onclick="borrowBook()">Emprunter</button>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h2>Retourner un livre</h2>
            </div>
            <div class="card-body">
                <button class="btn btn-success" onclick="returnBook()">Retourner</button>
            </div>
        </div>
    </div>
    {{-- <x-table :livres="$livres" /> --}}
@endsection
