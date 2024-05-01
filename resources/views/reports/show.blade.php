@foreach ($data as $d)
    Semester: {{ $d->semester->name }} <br><br>
    Teacher: {{ $d->teacher->name }} <br><br>
    Student: {{  $d->student->name }}  <br><br>
    Duration: {{  $d->time->duration }}  <br><br>
    Date: {{  $d->date}}  <br><br>
    <br><br><hr><br>
@endforeach