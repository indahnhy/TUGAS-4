@extends('layouts.dashboard')

@section('content')
    <h2>Profile</h2>
    <p>Nama: {{ $nama }}</p>
    <p>Email: {{ $email }}</p>
    <p>Alamat: {{ $alamat }}</p>
@endsection

@push('script')
<script>
    console.log('Halaman Profile dibuka');
    alert('Selamat datang di halam profile');
</script>
@endpush
