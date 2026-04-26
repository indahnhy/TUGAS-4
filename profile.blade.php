@extends('layouts.dashboard')

@section('content')
    <h2>Profile</h2>
    <p>Nama: {{ $nama }}</p>
    <p>Email: {{ $email }}</p>
    <p>Alamat: {{ $alamat }}</p>
@endsection