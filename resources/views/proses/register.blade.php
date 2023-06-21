@include('layout.header')
<form class="needs-validation" action="../proses/proses_login.php" method="post" novalidate>
    <img src="../assets/img/logo.png" alt="" width="150" height="150">
    <h1 class="h3 mb-3 fw-normal">WELCOME BACK</h1>
    <h1 class="h5 mt-4 mb-3 fw-normal">Please enter your email and password</h1>

    <!-- username form -->
    <div class="form-floating ms-2 me-2 mb-3">
        <input type="email" name="username" class="form-control" id="floatingInput" placeholder="name@example.com"
            required>
        <label for="floatingInput">Email address</label>
        <div class="valid-feedback mb-2">
            Looks good!
        </div>
        <div class="invalid-feedback mb-2">
            Username salah atau kosong!!
        </div>
    </div>

    <!-- password form -->
    <div class="form-floating ms-2 me-2 mb-5">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password"
            required>
        <label for="floatingPassword">Password</label>
        <div class="valid-feedback mb-2">
            Looks good!
        </div>
        <div class="invalid-feedback mb-2">
            Password salah atau kosong!!
        </div>
    </div>

    <button class="w-100 btn btn-lg btn-info" type="submit" name="submit">Log in</button>
</form>
<script src="../assets/js/signin.js"></script>
@include('layout.footer')
