@extends('welcome')
@section('sub')
    <!-- ======= About Section ======= -->
    <section id="resource" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h3>Subjects</h3>
                <p>Select <span>Subjects</span> Here</p>
            </div>

            {{-- <div class="row gy-4">
            <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
              <div class="call-us position-absolute">
                <h4>Book a Table</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
            <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                  Savor the flavors of tradition and innovation, where every dish tells a story of culinary excellence and passion.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>This line emphasizes the restaurant's commitment to both traditional recipes and innovative culinary techniques, promising a dining experience rich in flavor and history.</li>
                </ul><p class="fst-italic">
                  Indulge in a symphony of tastes, where fresh ingredients dance on your palate, creating unforgettable moments with every bite.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>Here, the focus is on the freshness of ingredients and the sensory experience they provide, promising memorable moments for diners.</li>
                </ul><p class="fst-italic">
                  Embark on a gastronomic journey where each plate is a masterpiece, crafted with care and served with warmth and hospitality.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>This line underscores the restaurant's dedication to culinary artistry, promising guests not just a meal, but an immersive journey guided by attentive service.</li>
                </ul>
                <div class="position-relative mt-4">
                  <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                  <a href="https://www.youtube.com/watch?v=9AkhHkrMoxc" class="glightbox play-btn"></a>
                </div>
              </div>
            </div>
        </div> --}}

            {{-- <div class="container"> --}}
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Computer Science & Engineering</h2>
                        </div>
                        <div class="card-body">
                            <br />
                            <br />
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject Name</th>
                                            <th>Subject Code</th>
                                            <th>Semester</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subject as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->code }}</td>
                                                <td> Semester {{ $item->semester }}</td>

                                                <td>
                                                    <a href="{{ route('show.notes', $item->id) }}" title="View Subject"
                                                        target="_blank"><button class="btn btn-info btn-sm"><i
                                                                class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    {{-- <a href="#" title="View Subject"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                                                    {{-- <a href="{{ url('/student/' . $item->id) }}" title="View Subject"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </section>
    <!-- End About Section -->
@endsection
