<h1>Update car {{ $car->id }}</h1>

<form action="{{ route('cars.update', $car->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-control">
        <label for="name">Make*</label>
        <input type="text" name="make" placeholder="Make" value="{{ $car->make }}">
    </div>
    <div class="form-control">
        <label for="model">Model*</label>
        <input type="text" name="model" placeholder="Model" value="{{ $car->model }}">
    </div>
    <div class="form-control">
        <label for="year">Year*</label>
        <input type="text" name="year" placeholder="Year" value="{{ $car->year }}">
    </div>
    <div class="form-control">
        <label for="license_plate">License plate*</label>
        <input type="text" name="license_plate" placeholder="License plate" value="{{ $car->license_plate }}">
    </div>
    <div class="form-control">
        <label for="color">Color</label>
        <input type="color" name="color" placeholder="Color" value="{{ $car->color }}">
    </div>
    <button type="submit">Update</button>

    <a href="{{ route('cars.index') }}">Cancel</a>

    <span>* required</span>
</form>

{{-- validation errors --}}
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
