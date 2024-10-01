<h1>Fees</h1>

<table>
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Fee Type</th>
            <th>Amount</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fees as $fee)
        <tr>
            <td>{{ $fee->student->name }}</td>
            <td>{{ $fee->fee_type }}</td>
            <td>{{ $fee->amount }}</td>
            <td>
                <a href="{{ route('fees.show', $fee->id) }}">Show</a>
                <a href="{{ route('fees.edit', $fee->id) }}">Edit</a>
                <form action="{{ route('fees.destroy', $fee->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('fees.create') }}">Create New Fee</a>