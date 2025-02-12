@extends('admin.dashboard')

@section('content')
<div class="container mt-4">
    <h2>👤 Clients</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($clients as $client)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone }}</td>
            </tr>
            @endforeach --}}
            <tr>
                <td>1</td>
                <td>Aya</td>
                <td>aya@gmail.com</td>
                <td>0600000000</td>
            </tr>
            <tr>
                <td>1</td>
                <td>David</td>
                <td>david@gmail.com</td>
                <td>0600000000</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Anna</td>
                <td>Anna@gmail.com</td>
                <td>0600000000</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
