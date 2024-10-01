<h1>Edit Fee</h1>

<form method="POST" action="{{ route('fees.update', $fee->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="student_id">Student:</label>
        <select id="student_id" name="student_id">
            @foreach($students as $student)
            <option value="{{ $student->id }}" {{ $student->id == $fee->student_id ? 'selected' : '' }}>{{ $student->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="fee_type">Fee Type:</label>
        <select id="fee_type" name="fee_type">
            <option value="tuition_fee" {{ $fee->fee_type == 'tuition_fee' ? 'selected' : '' }}>Tuition Fee</option>
            <option value="exam_fee" {{ $fee->fee_type == 'exam_fee' ? 'selected' : '' }}>Exam Fee</option>
            <option value="library_fee" {{ $fee->fee_type == 'library_fee' ? 'selected' : '' }}>Library Fee</option>
        </select>
    </div>
    <div>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" value="{{ $fee->amount }}">
    </div>
    <button type="submit">Update</button>
</form>