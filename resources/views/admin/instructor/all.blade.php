@extends('layouts.admin-templeate')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                {{-- instructors create button --}}
                <a class="btn btn-primary" href="{{ route('instructors.create') }}">Add instructors</a>


                <input id="search" class="form-control mt-2" type="text" placeholder="Search Here">

                {{-- instructors Show Table start --}}
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                          
                            <th>Instructors Name</th>
                            <th>Designation</th>
                            <th>Biodata</th>
                            <th>Image</th>
                            <th>Qualifications</th>                           
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        {{-- instructors loop start --}}
                        @foreach ($instructors as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                              
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->designation }}</td>
                                <td>{{ $item->bio }}</td>
                                <td>
                                    <img src="{{asset('instructimage/'.$item->image)}}" width="100px" height="100px" alt="">
                                </td>
                                <td>{{ $item->qualifications }}</td>
                                
                                <td>
                                    {{-- instructors edit start --}}
                                    <a href="{{ route('instructors.edit',$item->id) }}" ><i
                                            class="fa-solid fa-pen-to-square" style="color: #1e5ac2;"></i></a>
                                    {{-- instructors edit end --}}

                                    {{-- instructors delete start --}}
                                    <form onsubmit="return confirm('Are you sure?')"
                                        action="{{ route('instructors.destroy',$item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button ><i class="fa-solid fa-trash" style="color: #f90b47;"></i></button>
                                    </form>
                                    {{-- instructors delete end --}}
                                </td>
                            </tr>
                        @endforeach
                        {{-- instructors loop end --}}
                    </tbody>
                </table>
                {{-- instructors Show Table end --}}
            </div>
        </div>
    </div>
@endsection
