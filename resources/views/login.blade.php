
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Form</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #a5ecac, #7bd88a);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
    }

    .login-card {
      background: #ffffffff;
      padding: 40px 35px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 450px;
      transition: all 0.3s ease;
    }

    .login-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    .login-card h2 {
      text-align: center;
      color: #1b4b1d;
      font-weight: 700;
      margin-bottom: 30px;
    }

    .form-control {
      border-radius: 30px;
      padding: 12px 20px;
      border: 1px solid #a5ecac;
    }

    .form-control:focus {
      border-color: #57c263;
      box-shadow: 0 0 5px rgba(87, 194, 99, 0.5);
    }

    .btn-login {
      width: 100%;
      background: #62cf6dff;
      border: none;
      color: #051c06ff;
      font-weight: 600;
      border-radius: 30px;
      padding: 12px;
      transition: 0.3s;
    }

    .btn-login:hover {
      background: #1b4b1d;
      color: #fff;
    }

    .error-sms p {
      text-align: center;
      font-size: 0.9rem;
      color: #9b0909ff;
      margin-top: 10px;
    }

    .footer-text {
      text-align: center;
      margin-top: 15px;
      font-size: 0.9rem;
      color: #555;
    }
    

    .footer-text a {
      color: #099b2bff;
      text-decoration: none;
    }

    .footer-text a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <div class="login-card">
    <h2> User Login</h2>
    <form method="POST" action="{{ route('login.check') }}">
    @csrf


      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label fw-semibold">Email Address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label fw-semibold">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
      </div>

      <!-- Submit Button -->
      <div class="d-grid mt-4">
        <button type="submit" name="login" class="btn btn-login">Login</button>
      </div>
      
    </form>

    <div class="footer-text">
       <a href="#">Forgot Password?</a>
        <a href="{{ url('/') }}" class="fw-semibold">
        ← Back to Home
    </a>
    </div>
  </div>

  

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>