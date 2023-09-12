@extends('layouts.admin-templeate')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('instructors.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- write name --}}

                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Write name" required>
                    </div>
                    {{-- write name --}}

                    
                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" class="form-control" name="designation" id="designation" placeholder="Write name" required>
                    </div>
                    {{-- write bio --}}
                    <div class="mb-3">
                        <label for="bio" class="form-label">Biodata</label>
                        <input type="text" class="form-control" name="bio" id="bio" placeholder="Write bio" required>
                    </div>
                    {{-- upload image --}}

                    <div class="mb-3">
                        <label for="image" class="form-label">Instructors Image</label>
                        <input class="form-control" type="file" name="image" id="image" required>

                    </div>

                    {{-- write qualifications --}}
                    <div class="mb-3">
                        <label for="qualifications" class="form-label">Qualifications</label>
                        <input type="text" class="form-control" name="qualifications" id="qualifications"
                            placeholder="Write Qualifications" required>
                    </div>

                    <div>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
