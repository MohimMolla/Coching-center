@extends('layouts.admin-templeate')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                {{-- events create button --}}
                <a class="btn btn-primary" href="{{ route('events.create') }}">Add Events</a>


                <input id="search" class="form-control mt-2" type="text" placeholder="Search Here">

                {{-- events Show Table start --}}
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Events Title</th>
                            <th>Events Description</th>
                            <th>Events Image</th>
                            <th>Events Location</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        {{-- events loop start --}}
                        @foreach ($events as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <img src="{{asset('eventimage/'.$item->image)}}" width="100px" height="100px" alt="">
                                </td>
                                <td>{{ $item->location }}</td>
                                <td>
                                    {{-- events edit start --}}
                                    <a href="{{ route('events.edit',$item->id) }}" ><i
                                            class="fa-solid fa-pen-to-square" style="color: #1e5ac2;"></i></a>
                                    {{-- events edit end --}}

                                    {{-- events delete start --}}
                                    <form onsubmit="return confirm('Are you sure?')"
                                        action="{{ route('events.destroy',$item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button ><i class="fa-solid fa-trash" style="color: #f90b47;"></i></button>
                                    </form>
                                    {{-- events delete end --}}
                                </td>
                            </tr>
                        @endforeach
                        {{-- events loop end --}}
                    </tbody>
                </table>
                {{-- events Show Table end --}}
            </div>
        </div>
    </div>
@endsection
