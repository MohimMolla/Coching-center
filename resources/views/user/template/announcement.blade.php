<!-- Classes Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Our announcement !</h1>
            <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit
                eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>
        <div class="row g-4">
            @foreach ($announcements as $announcement)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="classes-item">

                        <div class="bg-light rounded-circle w-75 mx-auto p-3">
                            <img class="img-fluid " src="{{ asset('announcementsimage/' . $announcement->image) }}"
                                alt="">
                        </div>

                        <div class="bg-light rounded p-4 pt-5 mt-n5">
                            <a class="d-block text-center h3 mt-3 mb-4" href="">{{ $announcement->title }}
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Classes End -->
