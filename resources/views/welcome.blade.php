@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1 class="p-5 text-center">
    Laravel Migration Seeder
</h1>

<div class="container">
    <div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Company</th>
                <th scope="col">Departing From</th>
                <th scope="col">Departing Time</th>
                <th scope="col">Arriving At</th>
                <th scope="col">Arriving Time</th>
                <th scope="col">Train Number</th>
                <th scope="col">N. Coaches</th>
                <th scope="col">On Time</th>
                <th scope="col">Cancelled</th>
                </tr>
            </thead>
            <tbody>
                <!-- Stampo in pagina i dati della tabella trains -->
                @foreach ($trains as $train)
                    <tr>
                    <th scope="row">{{ $train->id }}</th>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departing_from }}</td>
                    <td>{{ $train->departing_time }}</td>
                    <td>{{ $train->arriving_at }}</td>
                    <td>{{ $train->arriving_time }}</td>
                    <td>{{ $train->train_numb }}</td>
                    <td>{{ $train->coaches_numb }}</td>

                    <!-- Controllo i valori booleani generati per stampare altro da 0 e 1 -->
                    @if ($train->on_time)
                        <td>Yes</td>
                    @else 
                    <td>Delayed</td>
                    @endif

                    @if ($train->cancelled)
                        <td>Cancelled</td>
                    @else 
                    <td>No</td>
                    @endif
                    
                    </tr>
                @endforeach
                
                
            </tbody>
        </table>
    </div>
</div>
@endsection
