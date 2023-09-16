@extends('layouts.user-tepmlate')
@section('content')
    <div class="container">
        <div class="row">
            {{-- course image start --}}
            <div class="col-lg-5">
                <div class="bg-light  w-75 mx-auto p-3">
                    <img class="img-fluid " src="{{ asset('instructimage/' . $instractors->image) }}" alt="">
                </div>

                {{-- Comments and Reviews form --}}

            </div>
		  {{-- course image end --}}
		   {{-- course content start --}}
		   <div class="col-lg-7 mt-3 p-3">
			<div class="bg-light  p-4 pt-5 mt-n5">
			    <p>instractors Name : {{ $instractors->name }}</p>
   
			    <small>Instructor Designation :{{ $instractors->designation }}</small>
   <p>Instructor Biodata : {{ $instractors->bio }}</p>
   <p>Instructor Qualifications : {{ $instractors->qualifications }}</p>
   
			    
			</div>
		 </div>
		 {{-- course content end --}}
        </div>
        

       
    </div>
@endsection
