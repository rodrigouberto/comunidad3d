<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('/') }}css/registroStyles.css">
    <link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Sunflower:300" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro - Print it</title>
  </head>
  <body>
    <div class="main_container">
      <header class="main_header">
        <div class="header_izquierdo">
          <h2><a class="lobby" href="index.php">Print It</a>!</h2>
        </div>

        <div class="inicio_sesion">
          <form class="inputs_inicio" action="" method="post">

            <input type='hidden' name='loginUsuario' value='1'/>


        <div class="div_email">
          <input id="email_login" class="email_inicio" type="email" name="email" value="" placeholder="E-mail">
          <br>
          <span id='register_email_errorloc' class='error'><?php echo !empty($erroresLogin["email"])?$erroresLogin["email"]."<br>":"" ?></span>
          <!-- <br> -->
          <label class="recordarUsuario" for="email">Recordar usuario <input type="checkbox" class="recordar_check" name="recordarUsuario" value=""></label>

        </div>

        <div class="div_pass">
          <input id="password" class="pass_inicio" type="password" name="password" value="" placeholder="Password">
          <br>
          <span id='register_email_errorloc' class='error'><?php echo !empty($erroresLogin["password"])?$erroresLogin["password"]."<br>":"" ?></span>
          <label class="recordarUsuario" for="pass_inicio">Recordar contraseña <input type="checkbox" class="recordar_check" name="recordarUsuario" value=""></label>
      </div>
      <div class="iniciarsesion">
        <input class="boton_inicio" type="submit" name="submit_usuario" value="Iniciar Sesión">
      </div>
      </form>
    </div>
    </header>
      <div class="parte_inferior">
        <div class="registro_usuarios">
        <form class="usuarios_form" action="{{ route('register') }}" method="post">
          @csrf

          <input type='hidden' name='registro' value='1'/>


          <h3>Registrese!</h3>



          <label for="nombreUsuario">Nombre de usuario</label>

          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} normal" name="name" value="{{ old('name') }}" required autofocus>

          @if ($errors->has('name'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif


          <label for="email">E-mail</label>
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} normal" name="email" value="{{ old('email') }}" required>

          @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif


          <label for="password">Contraseña</label>
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} normal" name="password" required>

          @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif


      <label for="confirmarPassword">Confirme contraseña</label>

      <input id="password-confirm" type="password" class="form-control normal" name="password_confirmation" required>



        <div class="enviar">
          <button type="submit" class="btn btn-primary" >
              {{ __('Register') }}
          </button>
        </div>
                </div>

        </form>
      </div>
    </div>
  </div>
  </body>
</html>
