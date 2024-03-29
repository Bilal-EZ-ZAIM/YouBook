@extends('layaout.master')

@section('main')
    <div class="container">
        <table class="table" style="height: 80vh;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>data de return </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($livers as $livre)
                    <tr>
                        <td>{{ $livre['id'] }}</td>
                        <td>{{ $livre['name'] }}</td>
                        <td>{{ Str::limit($livre['bio'], 100) }}</td>
                        <td>
                            {{ $livre['dateFinal'] }}
                        </td>
                    </tr>
                    <div class="modal fade" id="acheterModal{{ $livre['id'] }}" tabindex="-1" role="dialog"
                        aria-labelledby="acheterModalLabel{{ $livre['id'] }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="acheterModalLabel{{ $livre['id'] }}">Acheter Livre ID:
                                        {{ $livre['id'] }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{ $livre['dateFinal'] }}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
@endsection
