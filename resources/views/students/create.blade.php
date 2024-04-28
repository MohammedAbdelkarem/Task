<form method="POST" action="/students/store">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
    </div>

    <div>
        <label for="edu_zone">Edu Zone:</label>
        <input type="text" name="edu_zone" id="edu_zone" value="{{ old('edu_zone') }}" required>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit">Submit</button>
</form>