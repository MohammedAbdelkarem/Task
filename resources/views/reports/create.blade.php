<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <form id="my_form" method="POST" action="{{ route('report.store') }}">
        @csrf

        <div>
            <label for="report">Report:</label>
            <select id="report" name="report" required onchange="handleFieldTypeChange()">
                <option value="">Select the report type</option>
                    <option value="student">student report</option>
                    <option value="teacher">teacher report</option>
                    <option value="date">date report</option>
            </select>
        </div>
        <div>
            <label for="field">field</label>
            <input type="text" name="field" id="field" value="{{ old('field') }}" required>
        </div>
        <br><br>
        <button type="submit">Submit</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function handleFieldTypeChange() {
            var selectedType = $('#report').val();
            var $field = $('#field');

            if (selectedType === 'date') {
                $field.attr('type', 'date');
            } else {
                $field.attr('type', 'text');
            }
        }
    </script>
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