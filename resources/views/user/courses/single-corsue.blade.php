@extends('layouts.user-tepmlate')
@section('content')
    <div class="container">
        <div class="row">
            {{-- course image start --}}
            <div class="col-lg-5">
                <div class="bg-light  w-75 mx-auto p-3">
                    <img class="img-fluid " src="{{ asset('courseimage/' . $courses->image) }}" alt="">
                </div>

                {{-- Comments and Reviews form --}}
                <div class="mt-3">
                    <h1 class="border-bottom border-3 border-success pt-2">Course Review</h1>

                    <button id="comment" class="comment-btn btn-primary">Comment</button>
                    <div class="comment-form">



                        <form id="comment_form" class="mt-2" method="POST" action="">
                            @csrf
                            <div class="form-group">
                                <label for="comment">Your Comment:</label>
                                <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="rating">Rating :</label>
                                <input type="number" name="rating" id="rating" class="form-control" min="1"
                                    max="5" required>
                            </div>
                            <button class="btn btn-primary mt-2">Comment</button>
                        </form>

                    </div>
                </div>
            </div>
            {{-- course image end --}}

            {{-- course content start --}}
            <div class="col-lg-7 mt-3 p-3">
                <div class="bg-light  p-4 pt-5 mt-n5">
                    <p>Courses Name : {{ $courses->title }}</p>
                    <p class="text-primary mb-1">Instructor Name : {{ $courses->instructor->name }}</p>
                    <small>Instructor Designation :{{ $courses->instructor->designation }}</small>
                    <p><b>Course Price : {{ $courses->price }}</b></p>

                    <p>Course Description : <br> {{ $courses->description }}</p>
                    <div class=" pt-2">
                        <h6 class="text-success mb-1">Start Date : {{ $courses->start_date }}</h6>

                    </div>
                    <div class=" pt-2">
                        <h6 class="text-warning mb-1">End Date : {{ $courses->end_date }}</h6>

                    </div>

                    <div class="pt-2">
                        <a class="btn btn-primary" href="">Eneroll</a>
                    </div>






                </div>
            </div>
        </div>
        {{-- course content start --}}
    </div>
@endsection

@section('script')
    {{-- <script>
        $(document).ready(function() {
            $('.reply-form, .comment-form').hide();

            $(".reply-btn").click(function() {

                //console.log(' reply button is clicked');
                $(this).siblings('.reply-form').toggle();

            });

            $(".comment-btn").click(function() {
                //console.log('comment button is clicked');
                $(this).siblings('.comment-form').toggle();

            });
        });
    </script> --}}

    <script>
        $(document).ready(function() {
            $('#comment').click(function() {
                console.log("Clicked comment");
                alert("Comment");
                $('#comment_form').toggle();
            });
        });
    </script>
@endsection
