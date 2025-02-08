@extends('admin.dashboard')

@section('content')
    <div class="container mt-4">
        <h2>📄 Factures</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Client</th>
                    <th>Total Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($factures as $facture)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $facture->client->name }}</td>
                    </tr>
                @endforeach --}}
                    <tr>
                        <td>1</td>
                        <td>Aya</td>
                        <td>$230</td>
                        <td>09/08/2024</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>David</td>
                        <td>$79.99</td>
                        <td>20/03/2024</td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection
