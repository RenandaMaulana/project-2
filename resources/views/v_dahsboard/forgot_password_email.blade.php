<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Your Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/style_forgot_password_email.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.all.js"
        integrity="sha512-mDHahYvyhRtp6zBGslYxaLlAiINPDDEoHDD7nDsHoLtua4To71lDTHjDL1bCoAE/Wq/I+7ONeFMpgr62i5yUzw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <a href="{{ route('login') }}" type="button" class="btn-btn-exit">Login</a>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
            <form action="{{ route('forgot-password-email') }}" method="POST" onsubmit="login()">
                @csrf
                <label for="chk" aria-hidden="true">Forgot Your Password ?</label>
                {{-- <Div for="chk" aria-hidden="true">Selamat datang Di Login UMKM, silahkan Login terlebih dahulu
                </Div> --}}
                <input type="email" name="email" placeholder="Email" autofocus></input>
                <button type="submit">Kirim</button>
            </form>
            {{-- <button id="show_eye" type="checkbox" onclick="showHide()">Tampilkan Password </button>  --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    </div>
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
    {{-- <script type="text/javascript">
        function showHide() {
            var inputan = document.getElementById("inputPassword");
            if (inputan.type === "password") {
                inputan.type = "text";
            } else {
                inputan.type = "password";
            }
        }
    </script> --}}
    <script>
        document.getElementById("registerLink").onclick = function() {
            window.location.href = "/Register";
        };
    </script>
    @if (session()->has('title') && session()->has('icon') && session()->has('text'))
        <script class="alert alert-{{ session('icon') }}" role="alert">
            < h4 class = "alert-heading" > {{ session('title') }} < /h4> <
            p > {{ session('text') }} < /p>
        </script>
    @endif
    {{-- <script>
        function login() {
            Swal.fire({
                title: "Berhasil Login",
                text: "That thing is still around?",
                icon: "success"
            });

        }
    </script> --}}

    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
</body>

</html>
