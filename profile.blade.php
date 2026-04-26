@extends('layouts.dashboard')

@section('content')
    <h2>Profile</h2>

    <x-alert color="blue">
        Ini halaman profile
    </x-alert>

    <p>Nama: {{ $nama }}</p>
    <p>Email: {{ $email }}</p>
    <p>Alamat: {{ $alamat }}</p>
@endsection

@push('scripts')
<script>
    console.log('Halaman profile dibuka');
</script>
@endpush
