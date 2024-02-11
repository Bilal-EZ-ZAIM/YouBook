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
        </style>
    </head>

    <div class="container  d-flex flex-wrap">
        <div id="sidebar" class="order-1 order-md-0">
            <div class="btn-group-vertical">
                <button class="btn btn-primary" onclick="showSection('categorySection')">ajoute Category</button>
                <button class="btn btn-primary" onclick="showSection('tagSection')">ajout Tag</button>
                <button class="btn btn-primary" onclick="showSection('category')">les Profiles</button>
                <button class="btn btn-primary" onclick="showSection('tages')">les tages</button>
                <button class="btn btn-primary" onclick="showSection('wiki')">les livers</button>
                <button class="btn btn-primary" onclick="showSection('statictique')">statictique</button>
            </div>
        </div>

        <div id="content" class="order-0 order-md-1 flex-grow-1">
            <div id="categorySection" class="content-section active-section">
                <div class="content">
                    <h2>Ajouter des catégories</h2>
                    <form method="post" class="my-4">
                        <div class="mb-3">
                            <label for="nomCategorie" class="form-label">Nom de la catégorie</label>
                            <input type="text" id="nomCategorie" name="nomCategorie" class="form-control" required>
                        </div>
                        <button type="submit" name="ajoutCategorie" class="btn btn-primary">Ajouter catégorie</button>
                    </form>
                </div>
            </div>
            <div id="tagSection" class="content-section">
                <div class="content">
                    <h2>Ajouter des tags</h2>
                    <form method="post" class="my-4">
                        <div class="mb-3">
                            <label for="nomTag" class="form-label">Nom du tag</label>
                            <input type="text" id="nomTag" name="nomTag" class="form-control" required>
                        </div>
                        <button type="submit" name="ajoutBalise" class="btn btn-primary">Ajouter tag</button>
                    </form>
                </div>
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

                                    

                                    <div class="modal fade" id="modifierWiki{{ $row->idWiki }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="modal-title fs-5" id="exampleModalLabel">Modifier les is
                                                        archived
                                                    </h2>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" class="my-4">
                                                        <input type="text" name="is_archived" value="{{ $row->idWiki }}"
                                                            class="d-none">
                                                        @if ($row->is_archived == 0)
                                                            <button type="submit" name="ModifePublic"
                                                                class="btn btn-primary">public</button>
                                                        @else
                                                            <button type="submit" name="ModiferPrivet"
                                                                class="btn btn-primary">privet</button>
                                                        @endif
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
            

            <div id="category" class="content-section">
                <div class="content">
                    <h2>les profiles</h2>
                    @if (!empty($profile ))
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

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title fs-5" id="exampleModalLabel">Nouveau nom du Category</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" class="my-4">
                                        <div class="mb-3">
                                            <label for="nomTag" class="form-label">Nouveau Nom du Category</label>
                                            <input type="text" name="neaveCategory" class="form-control" required>
                                            <input type="text" name="idCategoey" class="form-control d-none"
                                                id="valueCategory" value="" required>
                                        </div>
                                        <button type="submit" name="ModiferCategory" class="btn btn-primary">Modifier
                                            Category</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form method="post" class="my-4">
                                        <div class="mb-3">
                                            <input type="text" name="idSupCategoey" class="form-control  d-none"
                                                id="idSupCategoey" value="" required>
                                        </div>
                                        <button type="submit" name="suppremerCategory"
                                            class="btn btn-primary ">suppremer Category</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

            <div id="tages" class="content-section">
                <div class="content">
                    <h2>tages</h2>
                    @if (!empty($data['tag']))
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom du Tag</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['tag'] as $index => $row)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $row->nomTag }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary ModifierTages"
                                                data-bs-toggle="modal" data-bs-target="#exampleModalTage"
                                                value="{{ $row->idBalise }}">
                                                Modifier
                                            </button>
                                            <button type="button" class="btn btn-danger suppremerTage"
                                                data-bs-toggle="modal" data-bs-target="#deleteModalTage"
                                                value="{{ $row->idBalise }}">
                                                Supprimer
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                    <div class="modal fade" id="exampleModalTage" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title fs-5" id="exampleModalLabel">Nouveau nom du Tag</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" class="my-4">
                                        <div class="mb-3">
                                            <label for="nomTag" class="form-label">Nouveau Nom du tag</label>
                                            <input type="text" name="ModifernomTag" class="form-control" required>
                                            <input type="text" name="idBalise" class="form-control " id="value"
                                                value="" required>
                                        </div>
                                        <button type="submit" name="balises" class="btn btn-primary">Modifier
                                            tag</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="deleteModalTage" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form method="post" class="my-4">
                                        <div class="mb-3">
                                            <input type="text" name="idSupTage" class="form-control d-none"
                                                id="idSupTage" value="" required>
                                        </div>
                                        <button type="submit" name="suppremerTage" class="btn btn-primary">suppremer
                                            tage</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
        let modifier = document.querySelectorAll(".ModifierTages");
        let modifierCategory = document.querySelectorAll(".ModifierCategory");
        let suppremerCategory = document.querySelectorAll(".suppremerCategory");
        let suppremerTage = document.querySelectorAll(".suppremerTage");

        function showSection(sectionId) {
            let sections = document.getElementsByClassName('content-section');
            for (var i = 0; i < sections.length; i++) {
                sections[i].classList.remove('active-section');
            }
            document.getElementById(sectionId).classList.add('active-section');
        }

        modifier.forEach((item, index) => {
            item.addEventListener('click', () => {
                document.getElementById("value").value = item.value;
            })
        })

        modifierCategory.forEach((item, index) => {
            item.addEventListener('click', () => {
                document.getElementById("valueCategory").value = item.value;
            })
        })

        suppremerCategory.forEach((item, index) => {
            item.addEventListener('click', () => {
                document.getElementById("idSupCategoey").value = item.value;
            })
        })

        suppremerTage.forEach((item, index) => {
            item.addEventListener('click', () => {
                document.getElementById("idSupTage").value = item.value;
            })
        })

        document.getElementById('search-form').addEventListener('submit', function(e) {
            e.preventDefault();
            let searchTerm = document.getElementById('search-term').value;
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('search-results').innerHTML = xhr.responseText;
                }
            };
            xhr.open('GET', 'affCate?term=' + encodeURIComponent(searchTerm), true);
            xhr.send();
        });
    </script>

@endsection
