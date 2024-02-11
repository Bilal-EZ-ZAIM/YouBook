@extends('layaout.master')
<style>
    .containers {
        height: 80vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .form-container {
        text-align: center;
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .form-container h2 {
        margin-bottom: 20px;
        color: #333;
    }

    .my-form input[type="date"],
    .my-form button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    .my-form input[type="date"] {
        margin-right: 10px;
    }

    .my-form button:hover {
        background-color: #0056b3;
    }

    .formation-container {
        text-align: center;
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .formation-container h2 {
        margin-bottom: 20px;
        color: #333;
    }

    .formation-container p {
        color: #555;
    }

    .form-container {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .reservation-header h2 {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
    }

    .reservation-form .form-group {
        margin-bottom: 20px;
    }

    .reservation-form label {
        font-size: 16px;
        color: #555;
    }

    .reservation-form input[type="date"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn-reserver {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-reserver:hover {
        background-color: #0056b3;
    }
</style>
@section('main')
    <div class="containers">
        <div class="formation-container">
            <h2>Formation sur le livre</h2>
            <div class="book-info">
                <div class="book-details">
                    <h3>{{ $liver->name }}</h3>
                    <p>{{ $liver->bio }}</p>
                </div>
            </div>
        </div>
        <div class="form-container">
            <div class="reservation-header">
                <h2>Réserver le livre</h2>
            </div>


            <form class="reservation-form" method="post" action="{{ route('acheter') }}">
                @csrf
                <div class="form-group">
                    <label for="returnDate">Date de retour prévue :</label>
                    <input type="date" id="returnDate" name="returnDate" class="form-control" value="">
                    <input type="hidden"  name="id" class="form-control" value="{{ $liver->id }}">
                </div>
                <button type="submit" class="btn btn-primary btn-reserver">Réserver</button>
            </form>
        </div>


    </div>
@endsection
