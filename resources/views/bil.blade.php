@extends('layaout.master')

@section('main')
    @if (session()->has('user_id'))
        <p>Session ID: {{ session('user_id') }}</p>
    @endif



    <div class="container mt-5 mb-5">
        <div class="row row-cols-1 row-cols-md-3 g-4 custom-card">
            @forelse ($livres as $livre)
                <div class="col">
                    <div class="card h-100">
                        <img src="https://images.pexels.com/photos/1516983/pexels-photo-1516983.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            class="card-img-top" alt="{{ $livre->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $livre->name }}</h5>
                            <p class="card-text">{{ Str::limit($livre->bio, 100) }}</p>
                            <p class="card-text"><small class="text-muted">ID: {{ $livre->id }}</small></p>
                            @if (session()->has('user_id'))
                                <a class="btn btn-primary" href="{{ route('reserver', ['id' => $livre->id]) }}">Reserver</a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <p>Votre panier est vide.</p>
            @endforelse
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        {{ $livres->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
@endsection
