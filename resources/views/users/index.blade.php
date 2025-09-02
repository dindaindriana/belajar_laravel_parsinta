<x-app-layout title="Users">
    <x-slot name="heading">User</x-slot>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    {{-- <td>{{ $user->created_at->format('d M Y') }}</td> --}}
                    <td>{{ $user->created_at->diffForhumans() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>
