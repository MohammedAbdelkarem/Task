<h1>test page</h1>
@foreach ($validatedData as $key => $value)
    {{ $key }}
    <br>
    {{ $value }}
    <hr>
@endforeach
{{-- {{ $validatedData->teacher_id }} --}}