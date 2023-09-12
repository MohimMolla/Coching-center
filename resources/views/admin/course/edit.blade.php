@extends('layouts.admin-templeate')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('courses.update',$courses->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="name" class="form-label">Instructors</label>
                        {{-- <input type="text" class="form-control" name="name" id="name" placeholder="Write name"> --}}
                        <select class="form-control" name="instructor_id" id="instructor_id" required>
                            @foreach ($instructors as $instructor)
                            <option value="{{$instructor->id}}" {{$instructor->id == $courses->instructor_id ? 'selected' : ''}}>
                                {{$instructor->name}}
                            </option>
                        @endforeach
                        </select>
                    </div>
                    {{-- write title --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$courses->title}}">
                    </div>
                    {{-- write Description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="description"
                        value="{{$courses->description}}">
                    </div>
                    {{-- image upload --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">Multiple files input example</label>
                        {{--<input class="form-control" type="file" id="image" multiple>--}}
                        <input class="form-control" type="file" name="image" id="image">

                    </div>
                    {{-- write price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="price"
                        value="{{$courses->price}}">
                    </div>
                    {{-- write start_date --}}
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start date</label>
                        <input type="date" class="form-control" name="start_date" id="start_date"
                        value="{{$courses->start_date}}">
                    </div>
                    {{-- write end_date --}}
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End date</label>
                        <input type="date" class="form-control" name="end_date" id="end_date"
                        value="{{$courses->end_date}}">
                    </div>

                    <div>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
