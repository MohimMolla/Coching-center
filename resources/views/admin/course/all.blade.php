@extends('layouts.admin-templeate')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                {{-- Course create button --}}
                <a class="btn btn-primary" href="{{ route('courses.create') }}">Add Courses</a>


                <input id="search" class="form-control mt-2" type="text" placeholder="Search Here">

                {{-- Course Show Table start --}}
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Course Name</th>
                            <th>Instructor Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        {{-- Course loop start --}}
                        @foreach ($courses as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->instructor->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <img src="{{asset('courseimage/'.$item->image)}}" width="100px" height="100px" alt="">
                                </td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->start_date }}</td>
                                <td>{{ $item->end_date }}</td>
                                <td>
                                    {{-- Course edit start --}}
                                    <a href="{{ route('courses.edit',$item->id) }}" ><i
                                            class="fa-solid fa-pen-to-square" style="color: #1e5ac2;"></i></a>
                                    {{-- Course edit end --}}

                                    {{-- Course delete start --}}
                                    <form onsubmit="return confirm('Are you sure?')"
                                        action="{{ route('courses.destroy',$item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button ><i class="fa-solid fa-trash" style="color: #f90b47;"></i></button>
                                    </form>
                                    {{-- Course delete end --}}
                                </td>
                            </tr>
                        @endforeach
                        {{-- Course loop end --}}
                    </tbody>
                </table>
                {{-- Course Show Table end --}}
            </div>
        </div>
    </div>
@endsection
