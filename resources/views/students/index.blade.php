<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Student List</title>
</head>
<body >
  
<div class="container my-5">
  <h2 class="text-center mt-5">Student List</h2>
  <div class="mb-3 text-center mt-4">
    <a href=" {{ route('students.create') }} " class="btn btn-primary">Add Student</a>
  </div>
  <table class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Department</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

     @foreach ($students as $student)
       <tr>
        <td> {{ $loop->iteration }} </td>
        <td> {{ $student->name }} </td>
        <td> {{ $student->email }} </td>
        <td>{{ $student->department->name }}</td>
        <td>
          <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-warning">Edit</a>
          <form action=" {{ route('students.destroy', $student) }} " method="POST" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>