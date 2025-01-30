<h1>Create a new car</h1>

<form action="{{ route('cars.store') }}" method="post">
    @csrf
    <div class="form-control">
        <label for="name">Make*</label>
        <input type="text" name="make" placeholder="Make">
    </div>
    <div class="form-control">
        <label for="model">Model*</label>
        <input type="text" name="model" placeholder="Model">
    </div>
    <div class="form-control">
        <label for="year">Year*</label>
        <input type="text" name="year" placeholder="Year">
    </div>
    <div class="form-control">
        <label for="license_plate">License plate*</label>
        <input type="text" name="license_plate" placeholder="License plate">
    </div>
    <button type="submit">Create</button>

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
