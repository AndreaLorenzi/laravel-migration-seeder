<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
      <table class="table table-dark">
        <thead>
            <tr>
                <th class="text-center text-danger">Company</th>
                <th class="text-center text-danger">Departure Station</th>
                <th class="text-center text-danger">Arrival Station</th>
                <th class="text-center text-danger">Departure Date</th>
                <th class="text-center text-danger">Arrival Date</th>
                <th class="text-center text-danger">Train Code</th>
                <th class="text-center text-danger">Number Of Carriages</th>
                <th class="text-center text-danger">In time</th>
                <th class="text-center text-danger">Deleted</th>

            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
                <tr>
                    <td class="text-center">{{ $train->company }}</td>
                    <td class="text-center">{{ $train->departure_station }}</td>
                    <td class="text-center">{{ $train->arrival_station }}</td>
                    <td class="text-center">{{ $train->departure_date }}</td>
                    <td class="text-center">{{ $train->arrival_date }}</td>
                    <td class="text-center">{{ $train->train_code }}</td>
                    <td class="text-center">{{ $train->number_of_carriages }}</td>
                    <td class="text-center">{{ $train->on_time ? 'si' : 'no' }}</td>
                    <td class="text-center">{{ $train->deleted ? 'si' : 'no' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </body>
</html>
