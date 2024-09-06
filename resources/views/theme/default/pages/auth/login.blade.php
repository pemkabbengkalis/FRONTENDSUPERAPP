@extends('theme.default.layouts.auth')

@section('auth-content')
    <form class="theme-form">
        <h4>Sign in to account</h4>
        <p>Enter your email & password to login</p>
        <div class="form-group">
            <label class="col-form-label">Email Address</label>
            <input class="form-control" type="email" required="" placeholder="Test@gmail.com">
        </div>
        <div class="form-group">
            <label class="col-form-label">Password</label>
            <div class="form-input position-relative">
                <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                <div class="show-hide"><span class="show"> </span></div>
            </div>
        </div>
        <div class="form-group mb-0">
            <div class="checkbox p-0">
                <input id="checkbox1" type="checkbox">
                <label class="text-muted" for="checkbox1">Remember password</label>
            </div><a class="link" href="forget-password.html">Forgot password?</a>
            <div class="text-end mt-3">
                <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
            </div>
        </div>
        <h6 class="text-muted mt-4 or">Or Sign in with</h6>
        <div class="social mt-4">
            <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i
                        class="txt-linkedin" data-feather="linkedin"></i> LinkedIn
                </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter"
                        data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/"
                    target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
        </div>
        <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p>
        <script>
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </form>
@endsection
