@extends('layouts.app')
@section('content')
{{--  <a href="{{ route('crud.create') }}">Tambah</a>  --}}
<a href="{{ route('crud.create') }}" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Add</a>

<table>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    @forelse ($crud as $item)
      <tr onclick="window.location.href = '{{ route('crud.show', ['crud' => $item->id]) }}'">
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->is_active ? 'Active' : 'non Active'}}</td>
        <td class="flex">
            <a href="{{ route('crud.edit', ['crud' => $item->id]) }}">edit</a>
            <form action="{{ route('crud.destroy', ['crud' => $item->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>


            </form>
        </td>
      </tr>
    @empty

    @endforelse

  </table>
@endsection
