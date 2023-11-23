@php
    /** @var string $concreteValue */
@endphp

@extends('partials.abstract-item')

@section('concrete')
    concreteValue: {{ $concreteValue }}
@endsection
