<!DOCTYPE html>
<html lang="en">

<head>
    <title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/style2.css" rel="stylesheet">
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
            <form action="{{ route('credentials') }}" method="POST" onsubmit="login()">
                @csrf
                <label for="chk" aria-hidden="true">Login</label>
                {{-- <Div for="chk" aria-hidden="true">Selamat datang Di Login UMKM, silahkan Login terlebih dahulu
                </Div> --}}
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" autofocus>
                <div class="password-wrapper">
                    <input type="password" name="password" placeholder="Password" id="inputPassword">
                    <div class="password-toggle" onclick="togglePasswordVisibility()">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <a href="{{ route('forgot-password') }}" id="forgotpw">Forgot password?</a>
                <button type="submit">Login</button>
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
        <Div class="login">
            <label id="registerLink">Sign Up</label>
        </Div>
    </div>
    </div>
    <script type="text/javascript">
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

    <script>
        // Pastikan Anda memeriksa apakah ada pesan sesi sebelum menampilkan SweetAlert
        @if (session('title') && session('icon') && session('text'))
            Swal.fire({
                title: "{{ session('title') }}",
                icon: "{{ session('icon') }}",
                text: "{{ session('text') }}",
            });
        @endif
    </script>

    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
</body>

</html>
