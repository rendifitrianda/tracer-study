<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN TRACER</title>
    <link rel="stylesheet" href="{{ url('public') }}/assets_alumni/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/dist/css/custom.css">
</head>

<body class="login-screen">



    <form action="{{ url('auth/login') }}" method="POST">
        @csrf
        <div class="form-container">
            <div class="form-header">
                <h2>TRACER <span>STUDY</span></h2>
            </div>
            <div class="form-body">
                <div class="row">
                    <div class="col-md-12">
                        <x-login.input label="Email" leftIcons="mail" type="email" name="email"
                            placeholder="Masukan email ..." />
                    </div>
                    <div class="col-md-12">
                        <x-login.input-password label="Password" leftIcons="lock-closed" rightIcons="eye-off"
                            type="password" name="password" placeholder="Masukan password ..." />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-block btn-sign-in mt-3">SIGN-IN</button>
                    </div>

                </div>
            </div>
        </div>
    </form>


    <script src="{{ url('public') }}/assets_alumni/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets_alumni/bootstrap/js/bootstrap.bundle.min.js"></script>
    </script>
    <script src="{{ url('public') }}/assets_alumni/ionicons/dist/ionicons.js"></script>
    <script>
        $('.form-icons.right').on('click', function() {
            var passIn = $('.input-password');
            var pasType = passIn.attr('type');
            var newType = (pasType === 'password') ? 'text' : 'password';
            // Set the new type
            passIn.attr('type', newType);

            var icons = $('.form-icons.right ion-icon');
            var iconsType = icons.attr('name');
            var newIcons = (iconsType == 'eye-off-outline') ? 'eye-outline' : 'eye-off-outline';

            // Set the new type
            icons.attr('name', newIcons);
        })
    </script>
</body>

</html>
