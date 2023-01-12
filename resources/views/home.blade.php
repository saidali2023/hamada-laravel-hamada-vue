@extends('layouts.app')

@section('content')
<!-- Page Content -->
  <div class="container intro-container">

     <home></home>
   <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>

        <!-- Blog Post -->
        <!-- content -->
        <div class="media simple-post" >
          <img class="mr-3" src="{{asset('assets/img/p1.jpg') }}" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="mt-0">
                <a href="#">title</a>
            </h4>
             crast sit amet nibth library
            <ul class="list-inline list-unstyled d-flex post-info">
                  <li><span><i class="fa fa-user"></i> posted by : <strong class="text-primary">hamada</strong> </span></li>
                  <li>|</li>
                  <li><span><i class="fa fa-calendar"></i>2 day , 8 hours</span></li>
                  <li>|</li>
                  <span><i class="fa fa-comment"></i> 2 comments</span>

            </ul>
          </div>
        </div>
        <div class="media simple-post" >
          <img class="mr-3" src="{{asset('assets/img/p1.jpg') }}" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="mt-0">
                <a href="#">title</a>
            </h4>
             crast sit amet nibth library
            <ul class="list-inline list-unstyled d-flex post-info">
                  <li><span><i class="fa fa-user"></i> posted by : <strong class="text-primary">hamada</strong> </span></li>
                  <li>|</li>
                  <li><span><i class="fa fa-calendar"></i>2 day , 8 hours</span></li>
                  <li>|</li>
                  <span><i class="fa fa-comment"></i> 2 comments</span>

            </ul>
          </div>
        </div>
        <div class="media simple-post" >
          <img class="mr-3" src="{{asset('assets/img/p1.jpg') }}" alt="Generic placeholder image">
          <div class="media-body">
            <h4 class="mt-0">
                <a href="#">title</a>
            </h4>
             crast sit amet nibth library
            <ul class="list-inline list-unstyled d-flex post-info">
                  <li><span><i class="fa fa-user"></i> posted by : <strong class="text-primary">hamada</strong> </span></li>
                  <li>|</li>
                  <li><span><i class="fa fa-calendar"></i>2 day , 8 hours</span></li>
                  <li>|</li>
                  <span><i class="fa fa-comment"></i> 2 comments</span>

            </ul>
          </div>
        </div>
        <div class="media simple-post">

        </div>
        <!-- Pagination -->
        <nav aria-label="...">
          <ul class="pagination float-right">
            <li class="page-item disabled">
              <span class="page-link">Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <span class="page-link">
                2
                <span class="sr-only">(current)</span>
              </span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design </a>
                  </li>
                  <li>
                    <a href="#">HTML and CSS</a>
                  </li>
                  <li>
                    <a href="#">Freebies </a>
                  </li>

                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">Laravel tutorial</a>
                  </li>
                  <li>
                    <a href="#">bootstrap</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>


      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
