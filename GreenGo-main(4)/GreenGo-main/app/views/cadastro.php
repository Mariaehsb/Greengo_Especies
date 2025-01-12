<?php session_start();?>
            <?php if(isset($_SESSION['msg_erro'])): ?>
                <span> 
                    <?= $_SESSION['msg_erro'] ?> </span>
            <?php endif ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/app/views/index.html">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!--scripts-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <!-- Progress bar -->
    <script src="js/progressbar.min.js"></script>
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

</head>


<body background="Desktop - 2.svg">
    
    <form>        
        <div class="form-group">
          <div class="row">
            <div class="col-sm">
                <h1>Criar conta</h1>
                
                <label for="exampleInputnome">nome</label>
                <br>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nome-cadastro" >
                <br>
                
                <label for="exampleInputEmail">email </label>
                <br>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="email-cadastro" >
                <br>
                
                <label for="exampleInputPassword">senha</label>
                <br>
                <input type="password" class="form-control" id="exampleInputEmail1">
                <small id="senha-cadastro" class="form-text text-muted">8 caracteres contendo letras e números</small>
                <br>
                
            <!--
                <label for="exampleInputPassword1">confirmar senha</label>
                <br>
                <input type="password" class="form-control" id="exampleInputEmail1">
                <br>
            -->

        <form>
          
          <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label for="exampleInputPassword">gênero</label>
                    <br>
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">gênero</label>
                    <select class="custom-select mr-sm-2" id="exampleInputEmail2">
                        <option selected></option>
                        <option value="feminino">feminino</option>
                        <option value="masculino">masculino</option>
                        <option value="outro">outro</option>
                    </select>   
                </div>
            </div>

            <br>
         
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label for="exampleInputPassword">nível de escolaridade</label>
                    <br>
                    <select class="custom-select mr-sm-2" id="exampleInputEmail2">
                        <option selected></option>
                        <option value="ensino fundamental 1"> ensino fundamental 1 </option>
                        <option value="ensino fundamental 2"> ensino fundamental 2 </option>
                        <option value="ensino medio"> ensino médio </option>
                        <option value="ensino superior"> ensino superior </option>
                    </select> 
                </div>
            </div>
            
            <br>

            <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary" id="botaocadastro">Cadastrar</button>
            </div>
            
            <div class="col-auto md-2">
                <label id="jatemumaconta">Já tem uma conta?</button>
            </div>
        </div>
    </form>
    
</body>          
</html>
