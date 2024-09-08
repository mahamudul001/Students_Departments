<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Homepage</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class=" bg-dark ">

  <!-- Main Section -->
  <section class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Student List</h5>
            <p class="card-text">Click the button below to view the student list.</p>
            <a href=" {{ route('students.index') }} " class="btn btn-primary">Go to Student List</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card text-center">
          <div class="card-body">
            <h5 class="card-title">Department List</h5>
            <p class="card-text">Click the button below to view the department list.</p>
            <a href=" {{ route('departments.index') }} " class="btn btn-secondary">Go to Department List</a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Bootstrap JS (Optional for Navbar Toggle) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
