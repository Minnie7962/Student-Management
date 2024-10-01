<h1>Create Exam</h1>

<form method="POST" action="{{ route('exams.store') }}">
    @csrf
    <div>
        <label for="name">Exam Name:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="date">Exam Date:</label>
        <input type="date" id="date" name="date">
    </div>
    <div>
        <label for="time">Exam Time:</label>
        <input type="time" id="time" name="time">
    </div>
    <button type="submit">Create</button>
</form>