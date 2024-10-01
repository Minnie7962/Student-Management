<h1>Show Fee</h1>

<p>Student Name: {{ $fee->student->name }}</p>
<p>Fee Type: {{ $fee->fee_type }}</p>
<p>Amount: {{ $fee->amount }}</p>

<a href="{{ route('fees.index') }}">Back to Fees</a>