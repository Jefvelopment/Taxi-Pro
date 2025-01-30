<h1>Cars</h1>

<table>
    <thead>
        <tr>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
            <th>License plate</th>
            <th>Color</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
            <tr>
                <td>{{ $car->make }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->license_plate }}</td>
                <td>{{ $car->color }}</td>
                <td>
                    <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
                    <a href="{{ route('cars.destroy', $car->id) }}" onclick="return confirm('Are you sure you want to delete this car?')">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('cars.create') }}">Create a new car</a>
