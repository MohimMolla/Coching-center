@extends('layouts.admin-templeate')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Instructors</label>
                        {{-- <input type="text" class="form-control" name="name" id="name" placeholder="Write name"> --}}
                        <select class="form-control" name="instructor_id" id="instructor_id" required>
                            <option value="-1">Select Instructors</option>
                            @foreach ($instructors as $instructor)
                            <option value="{{$instructor->id}}">{{$instructor->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- write title --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Write title" required>
                    </div>
                    {{-- write Description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="description"
                            placeholder="Write description" required>
                    </div>
                    {{-- image upload --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">Courses Image</label>
                        {{--<input class="form-control" type="file" id="image" multiple>--}}
                        <input class="form-control" type="file" name="image" id="image" required>

                    </div>
                    {{-- write price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="price"
                            placeholder="Write price" required>
                    </div>
                    {{-- write start_date --}}
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start date</label>
                        <input type="date" min="{{ date('Y-m-d') }}" class="form-control" name="start_date" id="start_date"
                            placeholder="Write start date" required>
                    </div>
                    {{-- write end_date --}}
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End date</label>
                        <input type="date" min="{{ date('Y-m-d') }}" class="form-control" name="end_date" id="end_date"
                            placeholder="Write end date" required>
                    </div>

                    <div>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
