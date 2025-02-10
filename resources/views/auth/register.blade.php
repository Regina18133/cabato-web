<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register and Log In</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../login-register-form/style.css">

</head>
<body>
  
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header text-center">
            <h3>Welcome</h3>
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Log In</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Register</button>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <form method="POST" action= "{{ route('register') }}">
                @csrf

                  <div class="mb-3">
                    <label for="registerName" :value="__('registerName')" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="registerName" :value="old('registerName')" placeholder="Enter full name">
                  </div>
                  <div class="mb-3">
                    <label for="registerName" :value="__('registerName')" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="registerName" :value="old('registerName')" placeholder="Enter full name">
                  </div>
                  <div class="mb-3">
                    <label for="registerEmail" :value="__('registerEmail')" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="registerEmail" :value="old('registerEmail')" placeholder="Enter email">
                  </div>
                  <div class="mb-3">
                    <label for="registerPassword" :value="__('registerPassword')" class="form-label">Password</label>
                    <input type="password" class="form-control" id="registerPassword" :value="old('registerPassword')" placeholder="Create password">
                  </div>
                  <button type="submit" class="btn btn-success w-100">Register</button>
                </div>
            </form>
                 
              <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <form method="POST" action= "{{ route('register') }}">
                  @csrf
                  <div class="mb-3">
                    <label for="loginEmail" :value="__('loginEmail')" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="loginEmail" :value="old('loginEmail')" placeholder="Enter email">
                  </div>
                  <div class="mb-3">
                    <label for="loginPassword" :value="__('loginPassword')" class="form-label">Password</label>
                    <input type="password" class="form-control" id="loginPassword" :value="old('loginPassword')" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary w-100">Log In</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
