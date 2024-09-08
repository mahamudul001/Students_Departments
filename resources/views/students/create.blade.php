<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Student Create</title>
</head>
<body>
  
<div class="container my-5">
  <h2 class="text-center mb-4">Add new Student</h2>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
  
@endif


{{-- create Student Form --}}

<form action=" {{ route('students.store') }} " method="POST">
  @csrf
  <div mb-3>
    <label for="name" class="form-label">Student Name</label>
    <input type="text" name="name" class="form-control" value=" {{ old('name') }} " required>
  </div>

  <div mb-3>
    <label for="email" class="form-label">Student Email</label>
    <input type="email" name="email" class="form-control" value=" {{ old('name') }} " >
  </div>

  <div mb-3>
    <label for="department_id" class="form-label">Student Department</label>
   <select name="department_id" class="form-select" required>
    <option value="">Select Department</option>
    @foreach ($departments as $department)
      <option value="{{ $department->id }}" {{old('department_id') == $department->id ? 'selected' : '' }} > {{ $department->name }} </option>
    @endforeach
   </select>
  </div>
  <button type="submit" class="btn btn-primary mt-5 ">Create Student</button>
</form>

</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>