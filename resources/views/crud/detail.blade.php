@extends('layouts.app')
@section('content')
    <div style="width:600px; display: flex; justify-content: space-around;">
        <a href="{{ route('crud.index') }}">Back</a>
        <span>Nama: {{ $crud->name }}</span>
        <span>Status: {{ $crud->is_active ? 'Active' : 'Not active' }}</span>
    </div>
@endsection
