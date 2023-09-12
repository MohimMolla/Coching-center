@extends('layouts.admin-templeate')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                {{-- announcements create button --}}
                <a class="btn btn-primary" href="{{ route('announcements.create') }}">Add Announcements</a>


                <input id="search" class="form-control mt-2" type="text" placeholder="Search Here">

                {{-- announcements Show Table start --}}
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        {{-- announcements loop start --}}
                        @foreach ($announcements as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->content }}</td>

                                <td>
                                    <img src="{{ asset('announcementsimage/' . $item->image) }}" width="100px" height="100px"
                                        alt="">
                                </td>

                            
                             
                                <td>
                                    {{-- announcements edit start --}}
                                    <a href="{{ route('announcements.edit', $item->id) }}"><i
                                            class="fa-solid fa-pen-to-square" style="color: #1e5ac2;"></i></a>
                                    {{-- announcements edit end --}}

                                    {{-- announcements delete start --}}
                                    <form onsubmit="return confirm('Are you sure?')"
                                        action="{{ route('announcements.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button><i class="fa-solid fa-trash" style="color: #f90b47;"></i></button>
                                    </form>
                                    {{-- announcements delete end --}}
                                </td>
                            </tr>
                        @endforeach
                        {{-- announcements loop end --}}
                    </tbody>
                </table>
                {{-- announcements Show Table end --}}
            </div>
        </div>
    </div>
@endsection
