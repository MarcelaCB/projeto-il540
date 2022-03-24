<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div>
        <p class="h1"><strong>Cadastro</strong></p>
        <p id="subtitulo">Complete suas informações</p>
    </div>
    <br>
    <form>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome"><strong> Nome Completo:</strong></label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div>
                <label for="genero"><strong>Genero:</strong></label>
                <label>
                    <input type="radio" name="sexo" value="masculino checked">Masculino
                </label>
                <label>
                    <input type="radio" name="sexo" value="feminino">Feminino
                </label>
            </div>
            <br>
            <div class="campo">
                <label for="dt_nascimento"><strong>Data de Nascimento:</strong></label>
                <input type="date" id="dt_nascimento" name="dt_nascimento" required>
            </div>
            <div class="campo">
                <label for="cpf"><strong>CPF:</strong></label>
                <input type="text" id="cpf" name="cpf" required>
            </div>
            <div class="campo">
                <label for="telefone"><strong>Telefone:</strong></label>
                <input type="tel" name="telefone" id="telefone" required>
            </div>
            <div class="campo">
                <label for="email"><strong>E-mail:</strong></label>
                <input type="email" id="email" name="email" placeholder="email@gmail.com" required>
            </div>
            <div class="campo">
                <label for="senha"><strong>Senha:</strong></label>
                <input type="password" name="senha" id="senha" required>
            </div>
            <br>

            <button type="submit">Cadastrado</button><br>
            <br>

            <button type="submit">Salvar</button>

            <button type="reset" >Excluir</button>

        </fieldset>
    </form>
</body>
</html>