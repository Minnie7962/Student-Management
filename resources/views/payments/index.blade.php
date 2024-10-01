<h1>Payments</h1>

<table>
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Amount</th>
            <th>Payment Method</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($payments as $payment)
        <tr>
            <td>{{ $payment->student->name }}</td>
            <td>{{ $payment->amount }}</td>
            <td>{{ $payment->payment_method }}</td>
            <td>
                <a href="{{ route('payments.show', $payment->id) }}">Show</a>
                <a href="{{ route('payments.edit', $payment->id) }}">Edit</a>
                <form action="{{ route('payments.destroy', $payment->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('payments.create') }}">Create New Payment</a>