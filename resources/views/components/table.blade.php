@props(['nom'])
<div class="container mt-5">
<h1> {{ $nom }} 
</h1>
    <h1 class="mb-4">Bienvenue à l'école YouBook</h1>
    <p class="lead">L'école YouBook souhaite une application facile à utiliser pour gérer sa petite bibliothèque.</p>

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
