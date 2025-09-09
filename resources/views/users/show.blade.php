<x-app-layout title="Users">
    <x-slot name="heading">{{ $user->name }}</x-slot>

    <div>{{ $user->email }}</div>
    <div>Registered at {{ $user->created_at->diffForHumans() }}</div>


    {{-- kenapa tombol delete haru make form,, karena html hanya support get dan post, Untuk DELETE, Laravel pakai method spoofing dengan @method('DELETE'). Jadi walaupun <form method="POST">, Laravel tetap anggap sebagai DELETE. Nah kalau mau kaya aksi view dan edit yaitu pake tag a tidak bisa secara langsung karena HTML <a> hanya bisa melakukan GET request.kecuali tetao gunakan form tapi dibikin gayaya seperti  tag a--}}
    <form method="post" action="/users/{{ $user->id }}" class="mt-6"> 
        @method('DELETE')
        @csrf
        <x-button type="submit">
            Delete
        </x-button>
    </form>
</x-app-layout> 