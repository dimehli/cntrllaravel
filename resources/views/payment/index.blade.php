@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        <h2>Payments</h2>
    </div>
    <div class="card-body">
        <a href="{{ route('payment.create') }}" class="btn btn-success btn-sm" title="Add New Payment">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br/>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <br/>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Payment Method</th>
                        <th>Paid Date</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                        <tr>
                            <td>{{ $payment->id }}</td>
                            <td>{{ $payment->type_of_pay }}</td>
                            <td>{{ $payment->paid_data }}</td>
                            <td>{{ $payment->amount }}</td>
                            <td>
                                <a href="{{ route('payment.show', $payment->id) }}" title="View Payment">
                                    <button class="btn btn-info btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i> View
                                    </button>
                                </a>
                                <a href="{{ route('payment.edit', $payment->id) }}" title="Edit Payment">
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                    </button>
                                </a>
                                <form method="POST" action="{{ route('payment.destroy', $payment->id) }}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment" onclick="return confirm('Confirm delete?')">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination-container d-flex justify-content-center">
                {{ $payments->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

@endsection
