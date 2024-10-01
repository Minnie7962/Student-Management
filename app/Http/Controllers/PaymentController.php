<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Student;
use App\Models\Fee;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('student', 'fee')->get(); // Eager load relationships
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        $students = Student::all();
        $fees = Fee::all();
        return view('payments.create', compact('students', 'fees'));
    }

    public function store(Request $request)
    {
        $payment = new Payment();
        $payment->student_id = $request->input('student_id');
        $payment->fee_id = $request->input('fee_id');
        $payment->amount_paid = $request->input('amount_paid');
        $payment->payment_date = $request->input('payment_date');
        $payment->payment_method = $request->input('payment_method');
        $payment->transaction_id = $request->input('transaction_id');
        $payment->save();
        return redirect()->route('payments.index');
    }
}
