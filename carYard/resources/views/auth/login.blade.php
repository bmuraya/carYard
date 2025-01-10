<x-guest-layout title="Login" bodyClass="page-login">

<h1 class="auth-page-title">Login </h1>
    
<form action="" method="post">
  <div class="form-group">
    <input type="email" placeholder="Your Email" />
  </div>
  <div class="form-group">
    <input type="password" placeholder="Your Password" />
  </div>
  <div class="text-right mb-medium">
    <a href="/password-reset.html" class="auth-page-password-reset"
      >Reset Password</a
    >
  </div>

  <button class="btn btn-primary btn-login w-full">Login</button>


</form>

<x-slot:footerLink>
  Already have an account? -
  <a href="/login.html"> Click here to login </a>
</x-slot:footerLink>
</x-guest-layou>