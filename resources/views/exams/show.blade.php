<h1>Show Exam</h1>

<p>Exam Name: {{ $exam->name }}</p>
<p>Exam Date: {{ $exam->date }}</p>
<p>Exam Time: {{ $exam->time }}</p>

<a href="{{ route('exams.index') }}">Back to Exams</a>