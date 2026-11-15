<div class="container-fluid">
  <div class="row">
<nav class="col-md-3 col-lg-2 bg-light sidebar">
    <ul class="nav flex-column pt-3">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('lecturers*') ? 'active' : '' }}" href="{{ route('lecturers.index') }}">Lecturers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('courses*') ? 'active' : '' }}" href="{{ route('courses.index') }}">Courses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('lectures*') ? 'active' : '' }}" href="{{ route('lectures.index') }}">Lectures</a>
        </li>
    </ul>
</nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

     
    </main>
  </div>
</div>



<!-- Bootstrap 5.3 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Feather Icons -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
