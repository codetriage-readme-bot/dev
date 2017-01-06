<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin panel</title>

    <!-- Styles -->
    <link href="{{ url('css/material.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/material-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/Exo2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/base.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-color--grey-100">
        <main class="mdl-layout__content">
            <div class="mdl-card mdl-shadow--6dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Панель керування</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <form>
                        {{ csrf_field() }}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" autocomplete="off" id="username" />
                            <label class="mdl-textfield__label edge-bcolor-red-after" for="username">Ім'я користувача</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="password" id="password" />
                            <label class="mdl-textfield__label" for="password">Пароль</label>
                        </div>
                    </form>
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <button class="mdl-button large mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="login()">Увійти</button>
                </div>
            </div>
        </main>
        <div id="info" class="mdl-js-snackbar mdl-snackbar">
            <div class="mdl-snackbar__text"></div>
            <button class="mdl-snackbar__action" type="button"></button>
        </div>
    </div>
    <!-- JavaScripts -->
    <script src="{{url('/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
    <script src="{{url('/js/material.min.js')}}" type="text/javascript"></script>
    <script>
        $('input').keyup(function() {
            if (event.keyCode == 13) login();
        });
        function login() {
            var username = $('#username').val();
            var password = $('#password').val();
            var snackbarContainer = $('#info').get(0);
            if (username != '' || password != '') {
                $.ajax({
                    url: '{{ url('/login') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        username: username,
                        password: password
                    },
                    success: function () {
                        window.location.replace('{{ url('/admin') }}');
                    },
                    error: function () {
                        snackbarContainer.MaterialSnackbar.showSnackbar({message: "Ім'я користувача або пароль невірні" });
                    }
                });
            } else {
                snackbarContainer.MaterialSnackbar.showSnackbar({message: 'Заповніть всі поля'});
            }
        }
    </script>
</body>
</html>