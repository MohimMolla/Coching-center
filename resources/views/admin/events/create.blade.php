@extends('layouts.admin-templeate')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- write title --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Write title">
                    </div>
                    {{-- write Description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="description"
                            placeholder="Write description">
                    </div>
                    {{-- image upload --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">Courses Image</label>
                        {{--<input class="form-control" type="file" id="image" multiple>--}}
                        <input class="form-control" type="file" name="image" id="image">

                    </div>
                    {{-- write price --}}
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" id="location"
                            placeholder="Write location">
                    </div>
                    

                    <div>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
