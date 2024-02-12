@extends('layaout.master')

@section('main')

    <head>
        <style>
            #sidebar {
                width: 200px;
                background: #f8f9fa;
                padding: 20px;
                box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            }

            #content {
                flex: 1;
                padding: 20px;
            }

            .btn-group {
                margin-bottom: 20px;
            }

            .content-section {
                display: none;
            }

            .active-section {
                display: block;
            }

            .content {
                padding: 20px;
                min-height: 80vh;
                background-color: #ffffff;
                box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
            }
            #categorySection{
                height: 80vh;
            }
        </style>
    </head>

    <div class="container  d-flex flex-wrap">
        <div id="sidebar" class="order-1 order-md-0">
            <div class="btn-group-vertical">
                <button class="btn btn-primary" onclick="showSection('categorySection')">ajoute livers</button>
                <button class="btn btn-primary" onclick="showSection('category')">les Profiles</button>
                <button class="btn btn-primary" onclick="showSection('wiki')">les livers</button>
            </div>
        </div>

        <div id="content" class="order-0 order-md-1 flex-grow-1">
            <div id="categorySection" class="content-section active-section">
            <form method="POST" action="{{ route('store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="bio">Bio :</label>
                    <textarea class="form-control" id="bio" name="bio" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Soumettre</button>
            </form>
            </div>
            

            <div id="wiki" class="content-section">
                <div class="content">
                    <h2>les livers</h2>
                    @if (!empty($wiki))
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date limite de soumission</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wiki as $index => $row)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->is_archived }}</td>
                                        <td>{{ Str::limit($row->bio, 50) }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary ModifierCategory"
                                                data-bs-toggle="modal" data-bs-target="#modifierWiki{{ $row->idWiki }}">
                                                Modifier
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>


            <div id="category" class="content-section">
                <div class="content">
                    <h2>les profiles</h2>
                    @if (!empty($profile))
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom du categori</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="search-results">
                                @foreach ($profile as $index => $row)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $row->name }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary ModifierCategory"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                value="{{ $row->idCategorie }}">
                                                Modifier
                                            </button>
                                            <button type="button" class="btn btn-danger suppremerCategory"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                value="{{ $row->idCategorie }}">
                                                Supprimer
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

            </div>
            <div id="statictique" class="content-section">
                <div class="container mt-5">
                    <h2 class="text-center">Les Statistiques</h2>
                    @foreach ($data as $key => $value)
                        <div class="card d-flex flex-grow-1 mt-4">
                            <div class="card-body">
                                <h3 class="card-title">{{ Functions::show($key) }}</h3>
                                <p class="card-text">{{ count($value) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script>

        function showSection(sectionId) {
            let sections = document.getElementsByClassName('content-section');
            for (var i = 0; i < sections.length; i++) {
                sections[i].classList.remove('active-section');
            }
            document.getElementById(sectionId).classList.add('active-section');
        }

        
    </script>

@endsection
