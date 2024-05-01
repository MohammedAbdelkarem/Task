<!DOCTYPE html>
<html>
<head>
    <script>
        var teacherSubjects = {!! $teacherSubjects->toJson() !!}; 
        var studentEduZone = {!! $studentEduZone->toJson() !!}; 

        function updateSubjectField() {
            var teacherId = document.getElementById('teacher_id').value;
            var subjectField = document.getElementById('subject');
            subjectField.value = teacherSubjects[teacherId] || '';
        }
        function updateEduZoneField() {
            var studentId = document.getElementById('student_id').value;
            var eduZoneField = document.getElementById('edu_zone');
            eduZoneField.value = studentEduZone[studentId] || '';
        }
        function updateDayField() {
            var selectedDate = document.getElementById('date').value;
            var selectedDay = new Date(selectedDate).toLocaleDateString('en-US', { weekday: 'long' });
            document.getElementById('day').value = selectedDay;
        }

    </script>
</head>
<body>
    <form id="my_form" method="POST" action="{{ route('app.store') }}">
        @csrf

        <div>
            <label for="student_id">Student:</label>
            <select id="student_id" name="student_id" required onchange="updateEduZoneField()">
                <option value="">Select a student</option>
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>
        <br><br>
        <div>
            <label for="teacher_id">Teacher:</label>
            <select id="teacher_id" name="teacher_id" required onchange="updateSubjectField()">
                <option value="">Select a teacher</option>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <br><br>
        <div>
            <label for="time_id">Time:</label>
            <select id="time_id" name="time_id" required>
                <option value="">Select a time</option>
                @foreach($times as $time)
                <option value="{{ $time->id }}">{{ $time->duration }}</option>
                @endforeach
            </select>
        </div>
        <br><br>
        <div>
            <label for="semester_id">Semester:</label>
            <select id="semester_id" name="semester_id" required>
                <option value="">Select a semester</option>
                @foreach($semesters as $semester)
                    <option value="{{ $semester->id }}">{{ $semester->name }}</option>
                @endforeach
            </select>
        </div>
        <br><br>
        <div>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required onchange="updateDayField()">
        </div>
        <br><br>
        <div>
            <label for="edu_zone">Edu Zone:</label>
            <input type="text" id="edu_zone" name="edu_zone" readonly>
        </div>
        <br><br>
        <div>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" readonly>
        </div>
        <br><br>
        <div>
            <label for="day">Day:</label>
            <input type="text" id="day" name="day" readonly>
        </div>
        <br><br>
        <div>
            <label for="merge">Merge:</label>
            <input type="checkbox" id="merge" name="merge">
        </div>
        <br><br>
        <button type="submit">Submit</button>
    </form>
    @if(session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif
    @if(session('success'))
        <div class="alert alert-error">
            {{ session('success') }}
        </div>
    @endif
    <hr>
    <a href="{{ route('dashboard') }}">Dashboard</a>
</body>
</html>