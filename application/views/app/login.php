<!DOCTYPE html>
<html lang="pt-br" >

<head>
  <meta charset="UTF-8">
  <title>Painel de Acesso</title>
  <!-- Bootstrap core CSS -->
    <link href=<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?> rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href=<?= base_url('assets/css/style.css') ?>>


</head>

<body>

  <div class="form">
      <h1 style="font-weight: bold; font-size: 30pt;">SearchDoctor</h1>

      <ul class="tab-group">
        <li id="tab-register" class="tab"><a href="#register">Cadastrar</a></li>
        <li id="tab-login" class="tab"><a href="#login">Log In</a></li>
      </ul>

      <?php if (isset($error_message)): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Atenção!</strong> <?= $error_message; ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php elseif (isset($success_message)): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= $success_message; ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>


      <div class="tab-content">


        <div id="login">
          <h1>Bem vindo!</h1>

          <form action=<?= base_url('login') ?> method="post">
              <div class="field-wrap">
              <label>
                Nome de Usuário<span class="req">*</span>
              </label>
              <input name="username" type="text" autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label>
                Senha<span class="req">*</span>
              </label>
              <input name="password" type="password" autocomplete="off"/>
            </div>

            <p class="forgot"><a href="#">Forgot Password?</a></p>

            <button class="button button-block"/>Log In</button>
          </form>

        </div>
        <div id="register">
          <h1>Cadastre-se grátis</h1>

          <form action=<?= base_url('register') ?> method="post">
            <div class="field-wrap">
              <label>
                Nome<span class="req">*</span>
              </label>
              <input name="nome" type="text"  autocomplete="off" />

            </div>

            <div class="field-wrap">
              <label>
                Email<span class="req">*</span>
              </label>
              <input name="email" type="email"  autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label>
                Telefone<span class="req">*</span>
              </label>
              <input name="tel" type="tel"  autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label>
                Senha<span class="req">*</span>
              </label>
              <input name="senha" type="password"  autocomplete="off"/>
            </div>

            <div class="field-wrap" >
              <select name="tipo" id="select-tipo-usuario">
                <option value="1">Cliente</option>
                <option value="2">Médico</option>
                <option value="3">Clínica</option>
              </select>
            </div>

            <div id="div-medico" class="collapse">
              <!-- Médico -->
              <div class="field-wrap">
                <label>
                  CRM<span class="req">*</span>
                </label>
                <input name="crm" type="text"  autocomplete="off"/>
              </div>
            </div>
            <div id="div-clinica" class="collapse">
              <!-- Clínica/posto -->
              <div class="field-wrap">
                <label>
                  CNPJ<span class="req">*</span>
                </label>
                <input name="cnpj" type="text" autocomplete="off"/>
              </div>
            </div>
            <div class="collapse">
              <!-- Endereço -->
              <div class="field-wrap">
                <label>
                  Bairro<span class="req">*</span>
                </label>
                <input name="bairro" type="text" autocomplete="off"/>
              </div>
              <div class="field-wrap">
                <label>
                  Rua<span class="req">*</span>
                </label>
                <input name="rua" type="text" autocomplete="off"/>
              </div>
              <div class="field-wrap">
                <label>
                  Número<span class="req">*</span>
                </label>
                <input name="numero" type="text" autocomplete="off"/>
                </div>
            </div>

            <button type="submit" class="button button-block"/>Cadastrar</button>
          </form>

        </div>
      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src=<?= base_url('assets/js/index.js') ?>></script>
  <script  src=<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>></script>

  <script type="text/javascript">
    $(function () {
      if ('<?= $action ?>' == 'login') {
        liberarTab('#tab-login a');
      } else {
        liberarTab('#tab-register a');
      }
    });
    $('#select-tipo-usuario').on('change', function() {
      if ($(this).val() == 'medico') {
        $('#div-medico').collapse('show');
        $('#div-clinica').collapse('hide');
      } else if ($(this).val() == 'clinica') {
        $('#div-medico').collapse('hide');
        $('#div-clinica').collapse('show');
      } else {
        $('#div-medico').collapse('hide');
        $('#div-clinica').collapse('hide');
      }
    });
  </script>

</body>

</html>
