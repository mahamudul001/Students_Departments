<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Department Index</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  
  <div class="container mt-5">
    <h2 class="text-center mb-4">Department List</h2>


   <div class="text-center m-4">
     <a href="{{route("departments.create")}}" class="btn btn-primary ">Create Department</a>
   </div>
    <!-- Department Table -->
    <div class="table-responsive mb-4">
      <table class="table table-striped table-bordered">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Department Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- Sample Data (You can dynamically generate this in PHP or Laravel) -->
   
          @foreach ($departments as $department)
            
<tr>
            <td> {{ $loop->iteration }} </td>
            <td> {{ $department->name }} </td>
            <td>
              <form action=" {{ route('departments.destroy', $department) }} " method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
              </form>
            </td>
          </tr>

          @endforeach
          
        </tbody>
      </table>
    </div>

 <div class="text-center m-4">
     <a href="/" class="btn btn-dark ">Return Home</a>
   </div>

  <!-- Bootstrap JS (Optional for form validation) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
