<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h2 class=" text-center mb-4 ">Add new Department</h2>

      <form action=" {{ route('departments.store') }} " method="POST">
        @csrf
        <div class="mb-3">
          <label for="department" class="form-label">Department Name</label>
          <input type="text" class="form-control" id="department_name" name="name" placeholder="Enter Department Name" required>
        </div>
        <button class="btn btn-primary" type="submit">Create Depatment</button>
      </form>
    </div>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>