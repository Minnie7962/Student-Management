<h1>Exams</h1>

<table>
    <thead>
        <tr>
            <th>Exam Name</th>
            <th>Exam Date</th>
            <th>Exam Time</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($exams as $exam)
        <tr>
            <td>{{ $exam->name }}</td>
            <td>{{ $exam->date }}</td>
            <td>{{ $exam->time }}</td>
            <td>
                <a href="{{ route('exams.show', $exam->id) }}">Show</a>
                <a href="{{ route('exams.edit', $exam->id) }}">Edit</a>
                <form action="{{ route('exams.destroy', $exam->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('exams.create') }}">Create New Exam</a>