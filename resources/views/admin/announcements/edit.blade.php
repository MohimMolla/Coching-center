@extends('layouts.admin-templeate')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('announcements.update',$announcements->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    {{-- write title --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$announcements->title}}" required>
                    </div>
                    {{-- write Description --}}
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <input type="text" class="form-control" name="content" id="content"
                        value="{{$announcements->content}}" required>
                    </div>
                    {{-- image upload --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">Courses Image</label>
                        {{--<input class="form-control" type="file" id="image" multiple>--}}
                        <input class="form-control" type="file" name="image" id="image" required>

                    </div>
                    
                    

                    <div>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
