<h1>Teachers</h1>
@if($teachers->isEmpty())
    <p>There is no teachers yet.</p>
@else
    @foreach ($teachers as $teacher)
        <p>Name: {{ $teacher->name }}</p>
        <p>Subject: {{ $teacher->subject }}</p>
        <hr>
    @endforeach
@endif
<a href="{{ route('teachers.create') }}">Add Teacher</a>