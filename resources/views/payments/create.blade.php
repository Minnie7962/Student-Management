<h1>Create Payment</h1>

<form method="POST" action="{{ route('payments.store') }}">
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
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount">
    </div>
    <div>
        <label for="payment_method">Payment Method:</label>
        <select id="payment_method" name="payment_method">
            <option value="cash">Cash</option>
            <option value="bank_transfer">Bank Transfer</option>
            <option value="online_payment">Online Payment</option>
        </select>
    </div>
    <button type="submit">Create</button>
</form>