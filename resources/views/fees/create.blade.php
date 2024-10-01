<h1>Create Fee</h1>

<form method="POST" action="{{ route('fees.store') }}">
    @csrf
    <div>
        <label for="student_id">Student:</label>
        <select id="student_id" name="student_id">
            @foreach($students as $student)
            <option value="{{ $student->id }}">{{ $student->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="fee_type">Fee Type:</label>
        <select id="fee_type" name="fee_type">
            <option value="tuition_fee">Tuition Fee</option>
            <option value="exam_fee">Exam Fee</option>
            <option value="library_fee">Library Fee</option>
        </select>
    </div>
    <div>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount">
    </div>
    <button type="submit">Create</button>
</form>