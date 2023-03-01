<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Rental Buku | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
 
  <body>
    
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container-fluid">
                
              <a class="navbar-brand" href="#">Peprustakaan</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>

          <div class="body-content h-100">
                <div class="row g-0 h-100 ">
                    <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
                     

                      @if(Auth::user())
                          @if (Auth::user()->role_id ==1 )
                                <a href="/dashboard" @if (request()->route()->uri == 'dashboard')   class="active"  @endif>Dashboard</a>
                                <a href="/books"@if (request()->route()->uri == 'books'  || request()->route()->uri == 'book-add' ||  request()->route()->uri == 'book-edit/{slug}') class="active" @endif >Books</a>
                                <a href="/categories "@if (request()->route()->uri == 'categories' || request()->route()->uri == 'category-add' || request()->route()->uri == 'category-deleted' || request()->route()->uri == 'category-edit/{slug}') class="active" @endif>Categories</a>
                                <a href="/users"@if (request()->route()->uri == 'users' || request()->route()->uri == 'registerred-user'|| request()->route()->uri == 'user-detail' || request()->route()->uri == 'user-benned'  ) class="active" @endif>Users</a>
                                <a href="/rent_logs"@if (request()->route()->uri == 'rent_logs')    class="active" @endif >Rent Log</a>
                                <a href="/book-rent"  @if (request()->route()->uri == 'book-rent') class="active" @endif>Book Rent</a>
                                <a href="/book-return"  @if (request()->route()->uri == 'book-return') class="active" @endif>Book Return</a>
                                <a href="/logout">Logout</a>
                              @else

                                <a href="/profile" @if (request()->route()->uri == 'profile') class="active" @endif>Profile</a>
                                <a href="/book-list"  @if (request()->route()->uri == 'book-list') class="active" @endif>Book List</a> 
                                <a href="/logout">Logout</a>
                            @endif
                            @else
                            <a href="/login">Login</a>
                            @endif


                    </div>
                    <div class="content col-lg-10 p-5">
                        @yield('content')
                    </div>
                </div>
          </div>
    </div>

    <script>
      var deleteLinks = document.querySelectorAll('.delete');
      for (var i = 0; i < deleteLinks.length; i++) {
    deleteLinks[i].addEventListener('click', function(event) {
        event.preventDefault();

        var choice = confirm(this.getAttribute('data-confirm'));

        if (choice) {
            window.location.href = this.getAttribute('href');
        }
    });
}
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
 
  </body>
</html>