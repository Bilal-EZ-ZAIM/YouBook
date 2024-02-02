@extends('layaout.master')

@section('main')
    <h1>hello</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profile as $livre)
                <tr>
                    <td>{{ $livre['id'] }}</td>
                    <td>{{ $livre['name'] }}</td>
                    <td>{{ $livre['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
        
    </table>

    {{ $profile->links() }}
    
@endsection
