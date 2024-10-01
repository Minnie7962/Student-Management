<h1>Edit Exam</h1>

<form method="POST" action="{{ route('exams.update', $exam->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Exam Name:</label>
        <input type="text" id="name" name="name" value="{{ $exam->name }}">
    </div>
    <div>
        <label for="date">Exam Date:</label>
        <input type="date" id="date" name="date" value="{{ $exam->date }}">
    </div>
    <div>
        <label for="time">Exam Time:</label>
        <input type="time" id="time" name="time" value="{{ $exam->time }}">
    </div>
    <button type="submit">Update</button>
</form>