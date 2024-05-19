<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Payment;

class PayController extends Controller
{
    public function index(): View
{
    $payments = Payment::paginate(2);
    return view('payment.index', ['payments' => $payments]);
}

public function create(): View
{
    return view('payment.create');
}

public function store(Request $request): RedirectResponse
{
    // Votre logique de validation et de création

    return redirect()->route('payment.index')->with('success', 'Data was successfully sent');
}

public function show(string $id): View
{
    $payment = Payment::find($id);
    return view('payment.show', ['payment' => $payment]);
}

public function edit(string $id): View
{
    $payment = Payment::find($id);
    return view('payment.edit', ['payment' => $payment]);
}

public function update(Request $request, string $id): RedirectResponse
{
    // Votre logique de mise à jour

    return redirect()->route('payment.index')->with('flash_message', 'Payment Updated!');
}

public function destroy(string $id): RedirectResponse
{
    // Votre logique de suppression

    return redirect()->route('payment.index')->with('flash_message', 'Payment deleted!');
}
}