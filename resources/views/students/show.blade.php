<h1>Students</h1>
@if($students->isEmpty())
    <p>There is no students yet.</p>
@else
    @foreach ($students as $student)
        <p>Name: {{ $student->name }}</p>
        <p>Subject: {{ $student->edu_zone }}</p>
        <hr>
    @endforeach
@endif
<a href="{{ route('students.create') }}">Add Student</a>