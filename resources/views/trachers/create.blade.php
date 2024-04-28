<form method="POST" action="/teachers/store">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
    </div>

    <div>
        <label for="edu_zone">Subject:</label>
        <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required>
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