
?>
!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br/>
                <br/>
                <h2>Cadastro de Conta.</h2>
                <h5>(Cadastre seus Dados de Acesso aqui).</h5>
                <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <strong>Preencha todos os dados:</strong>
                    </div>
                    <div class="panel-body">
                        <br/>
                        <form method="post" action="locacao.php">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                <input type="text" class="form-control" placeholder="Digite seu Nome aqui..." name= "nome"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" placeholder="Digite seu E-mail aqui..." name= "email"/>
                            </div>
                            <span style="font-size: 9px; padding-left: 4px; font-style: italic;">A SENHA deve conter entre 6 e 8 caracteres!</span>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Digite sua Senha aqui..." name= "senha"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Digite novamente sua Senha..." name= "rsenha"/>
                            </div>
                            <button class="btn btn-success" name= "btnCadastrar">Cadastrar</button>
                        </form> 
                        <hr/>
                        <span>Já possui uma Conta?</span> <a href="login.php">Clique aqui...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>