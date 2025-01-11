@extends('layout')

@section('title')
    Update User Data 
@endsection

@section('content')
    <form action="{{ route('users.update', $users->id) }}" method="post">
        @csrf
        @method('PUT')
        {{-- <pre>
            @php
                print_r($errors->all);
            @endphp
        </pre> --}}
        <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" value="{{ $users->name }}" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label for="useremail" class="form-label">User Email</label>
            <input type="text" value="{{ $users->email }}" class="form-control" name="useremail">
        </div>
        <div class="mb-3">
            <label for="userage" class="form-label">User Age</label>
            <input type="text" value="{{ $users->age }}" class="form-control" name="userage">
        </div>
        <div class="mb-3">
            <label for="usercity" class="form-label">User City</label>
            <input type="text" value="{{ $users->city }}" class="form-control" name="usercity">
        </div>
        <div class="mb-3">
            <input type="submit" value="Save" class="btn btn-success">
        </div>
    </form>
@endsection