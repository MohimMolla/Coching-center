@extends('layouts.user-tepmlate')
@section('content')
    {{-- carousel include --}}
    @include('user.template.carousel')
    {{-- facilities include --}}
    @include('user.template.facilities')
    {{-- action include --}}
    @include('user.template.action')
    {{-- classes include --}}
    @include('user.template.classes')
    {{-- teachers include --}}
    @include('user.template.teachers')
    {{-- announcement include --}}
    @include('user.template.announcement')
    {{-- event include --}}
    @include('user.template.events')
@endsection
