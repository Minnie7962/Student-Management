<!-- resources\views\payments\show.blade.php -->

<h1>Show Payment</h1>

<p>Student Name: {{ $payment->student->name }}</p>
<p>Amount: {{ $payment->amount }}</p>
<p>Payment Method: {{ $payment->payment_method }}</p>

<a href="{{ route('payments.index') }}">Back to Payments</a>