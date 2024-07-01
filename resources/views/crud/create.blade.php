@extends('layouts.app')
@section('content')
    <span>form create</span>
    <form action="{{ route('crud.store') }}" method="POST">
        @csrf
        <label for="name">Nama</label>
        <input type="text" id="name" name="name">

        <label for="is_active">Status: </label>
        <div >
            <label for="active">Active</label>
            <input type="radio" name="is_active" id="active" value="1">
            <label for="not_active">Not Active</label>
            <input type="radio" name="is_active" id="not_active" value="0">
        </div>

        <a href="{{ route('crud.index') }}">Cancle</a>
        <button type="submit">Submit</button>
    </form>
@endsection
