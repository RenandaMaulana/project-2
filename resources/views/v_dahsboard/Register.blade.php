<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/style2.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.all.js"
        integrity="sha512-mDHahYvyhRtp6zBGslYxaLlAiINPDDEoHDD7nDsHoLtua4To71lDTHjDL1bCoAE/Wq/I+7ONeFMpgr62i5yUzw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <a href="{{ route('dahsboard-subang') }}" type="button" class="btn-btn-exit">Dahsboard</a>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="{{ route('daftar') }}" method="POST">
                @csrf
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="name" placeholder="Username" required="">
                <input type="email" name="email" placeholder="email" autofocus required>
                <div class="password-wrapper">
                    <input type="password" name="password" placeholder="Password" id="inputPassword">
                    <div class="password-toggle" onclick="togglePasswordVisibility('inputPassword')">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <div class="password-wrapper">
                    <input type="password" name="password_validasi" placeholder="masukan Password kembali"
                        id="inputPasswordKembali" required>
                    <div class="password-toggle" onclick="togglePasswordVisibility('inputPasswordKembali')">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <button type="submit">Register</button>
            </form>
        </div>
        <Div class="login">
            <label id="registerLink">Login</label>
        </Div>
    </div>
    <script>
        document.getElementById("registerLink").onclick = function() {
            window.location.href = "/login";
        };
    </script>
    {{-- <script type="text/javascript">
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("inputPassword");
            var passwordIcon = document.querySelector(".password-toggle i");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordIcon.classList.remove("fa-eye");
                passwordIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                passwordIcon.classList.remove("fa-eye-slash");
                passwordIcon.classList.add("fa-eye");
            }
        }
    </script> --}}
    <script type="text/javascript">
        function togglePasswordVisibility(inputId) {
            var passwordInput = document.getElementById(inputId);
            var passwordIcon = passwordInput.nextElementSibling.querySelector("i");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordIcon.classList.remove("fa-eye");
                passwordIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                passwordIcon.classList.remove("fa-eye-slash");
                passwordIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>

</html>
