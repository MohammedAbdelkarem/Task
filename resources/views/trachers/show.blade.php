@foreach ($teachers as $teacher)
    <p>Teacher Name: {{ $teacher->edu_zone }}</p>
    <p>Subject: {{ $teacher->subject }}</p>
    <hr>
@endforeach

//stopping here , if the empty has no data then we shold print this , otherwise , print the data 