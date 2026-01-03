<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Three Number Input Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-body">
          <h4 class="text-center mb-4">Enter Three Numbers</h4>

          <form method="post" action="{{route('find_lerge')}}">
            @csrf
            <div class="mb-3">
              <label class="form-label">Number One</label>
              <input type="number" name="num1" class="form-control" placeholder="Enter first number" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Number Two</label>
              <input type="number" name="num2" class="form-control" placeholder="Enter second number" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Number Three</label>
              <input type="number" name="num3" class="form-control" placeholder="Enter third number" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Result</label>
              <input type="text" name="result" class="form-control" placeholder="" readonly value="{{$result ?? 
              ''}}">
            </div>

            <button type="submit" name="show" value="Show" class="btn btn-success w-100">
              Show
            </button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
