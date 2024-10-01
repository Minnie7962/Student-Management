<h1>Edit Payment</h1>

<form method="POST" action="{{ route('payments.update', $payment->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="student_id">Student:</label>
        <select id="student_id" name="student_id">
            @foreach($students as $student)
            <option value="{{ $student->id }}" {{ $student->id == $payment->student_id ? 'selected' : '' }}>{{ $student->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" value="{{ $payment->amount }}">
    </div>
    <div>
        <label for="payment_method">Payment Method:</label>
        <select id="payment_method" name="payment_method">
            <option value="cash" {{ $payment->payment_method == 'cash' ? 'selected' : '' }}>Cash</option>
            <option value="bank_transfer" {{ $payment->payment_method == 'bank_transfer' ? 'selected' : '' }}>Bank Transfer</option>
            <option value="online_payment" {{ $payment->payment_method == 'online_payment' ? 'selected' : '' }}>Online Payment</option>
        </select>
    </div>
    <button type="submit">Update</button>
</form>