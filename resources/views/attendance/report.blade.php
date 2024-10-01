<h1>Attendance Report</h1>

<table>
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Attendance Date</th>
            <th>Attendance Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($attendances as $attendance)
        <tr>
            <td>{{ $attendance->student->name }}</td>
            <td>{{ $attendance->date }}</td>
            <td>
                @if($attendance->present)
                <span class="badge badge-success">Present</span>
                @else
                <span class="badge badge-danger">Absent</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('attendance.index') }}">Back to Attendance</a>