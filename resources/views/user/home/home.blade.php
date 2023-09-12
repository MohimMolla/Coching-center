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
    {{-- classes include --}}
    @include('user.template.teachers')
@endsection
