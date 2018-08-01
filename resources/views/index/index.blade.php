@extends('layouts.app')

@push('css')
    <style>
        body {
            background-color: #1d68a7;
        }
    </style>
@endpush

@section('content')

    {{$teste}}
@endsection


@push('scripts')
    <script>
        alert('ola');
    </script>
@endpush
