  <!-- Team Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h1 class="mb-3">Popular Teachers</h1>
              <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit
                  eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
          </div>
          <div class="row g-4">
              @foreach ($instractors as $instractor)
                  <div class="col-lg-4 col-md-6 h-4 wow fadeInUp" data-wow-delay="0.1s">
                      <a href="{{route('teacher_single',$instractor->id)}}">
                          <div class="team-item position-relative">

                              <img class="img-fluid h-4 rounded-circle w-75"
                                  src="{{ asset('instructimage/' . $instractor->image) }}" height="300px" width="300px"
                                  alt="">
                              <div class="team-text">
                                  <h3>{{ $instractor->name }}</h3>
                                  <p>{{ $instractor->designation }}</p>
                                  <div class="d-flex align-items-center">
                                      <a class="btn btn-square btn-primary mx-1" href=""><i
                                              class="fab fa-facebook-f"></i></a>
                                      <a class="btn btn-square btn-primary  mx-1" href=""><i
                                              class="fab fa-twitter"></i></a>
                                      <a class="btn btn-square btn-primary  mx-1" href=""><i
                                              class="fab fa-instagram"></i></a>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
              @endforeach
              {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
			  <div class="team-item position-relative">
				 <img class="img-fluid rounded-circle w-75" src="{{asset('user/img/team-2.jpg')}}" alt="">
				 <div class="team-text">
					<h3>Full Name</h3>
					<p>Designation</p>
					<div class="d-flex align-items-center">
					    <a class="btn btn-square btn-primary mx-1" href=""><i
							  class="fab fa-facebook-f"></i></a>
					    <a class="btn btn-square btn-primary  mx-1" href=""><i
							  class="fab fa-twitter"></i></a>
					    <a class="btn btn-square btn-primary  mx-1" href=""><i
							  class="fab fa-instagram"></i></a>
					</div>
				 </div>
			  </div>
		   </div>
		   <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
			  <div class="team-item position-relative">
				 <img class="img-fluid rounded-circle w-75" src="{{asset('user/img/team-3.jpg')}}" alt="">
				 <div class="team-text">
					<h3>Full Name</h3>
					<p>Designation</p>
					<div class="d-flex align-items-center">
					    <a class="btn btn-square btn-primary mx-1" href=""><i
							  class="fab fa-facebook-f"></i></a>
					    <a class="btn btn-square btn-primary  mx-1" href=""><i
							  class="fab fa-twitter"></i></a>
					    <a class="btn btn-square btn-primary  mx-1" href=""><i
							  class="fab fa-instagram"></i></a>
					</div>
				 </div>
			  </div>
		   </div> --}}
          </div>
      </div>
  </div>
  <!-- Team End -->
