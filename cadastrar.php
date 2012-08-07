<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Grupo Patriarca : Atualização de cadastro</title>
    <?php
    
    if (PATH_SEPARATOR == ";") {
        $quebra_linha = "\r\n";
    }
    else {
        $quebra_linha = "\n";   
    }

    $destinatario = "vendas@grupopatriarca.com.br";
    $nome = $_POST['textbox-nome'];
    $nomeFantasia = $_POST['textbox-nome-fantasia'];
    $cnpjRg = $_POST['textbox-cnpj-rg'];
    $endInstalacao = $_POST['textbox-endereco-instalacao'];
    $bairro = $_POST['textbox-bairro'];
    $estado = $_POST['textbox-estado'];
    $cidade = $_POST['textbox-cidade'];
    $cep = $_POST['textbox-cep'];
    $contato = $_POST['textbox-nome-contato'];
    $telefone = $_POST['textbox-telefone'];
    $email = $_POST['textbox-email'];
    $nomeCompletoLinha1 = $_POST['textbox-nome-completo-linha-1'];
    $nomeCompletoLinha2 = $_POST['textbox-nome-completo-linha-2'];
    $nomeCompletoLinha3 = $_POST['textbox-nome-completo-linha-3'];
    $nomeCompletoLinha4 = $_POST['textbox-nome-completo-linha-4'];
    $telefoneResidencialLinha1 = $_POST['textbox-telefone-residencial-linha-1'];
    $telefoneResidencialLinha2 = $_POST['textbox-telefone-residencial-linha-2'];
    $telefoneResidencialLinha3 = $_POST['textbox-telefone-residencial-linha-3'];
    $telefoneResidencialLinha4 = $_POST['textbox-telefone-residencial-linha-4'];
    $telefoneMovelLinha1 = $_POST['textbox-telefone-movel-linha-1'];
    $telefoneMovelLinha2 = $_POST['textbox-telefone-movel-linha-2'];
    $telefoneMovelLinha3 = $_POST['textbox-telefone-movel-linha-3'];
    $telefoneMovelLinha4 = $_POST['textbox-telefone-movel-linha-4'];
    $horarioSegSex = $_POST['textbox-horario-seg-a-sex'];
    $horarioSab = $_POST['textbox-horario-sab'];
    $horarioDomFeriado = $_POST['textbox-dom-e-feriado'];
    $nomeCompletoPainel1 = $_POST['textbox-nome-completo-painel-linha-1'];
    $nomeCompletoPainel2 = $_POST['textbox-nome-completo-painel-linha-2'];
    $nomeCompletoPainel3 = $_POST['textbox-nome-completo-painel-linha-3'];
    $nomeCompletoPainel4 = $_POST['textbox-nome-completo-painel-linha-4'];
    $cargoLinha1 = $_POST['textbox-cargo-linha-1'];
    $cargoLinha2 = $_POST['textbox-cargo-linha-2'];
    $cargoLinha3 = $_POST['textbox-cargo-linha-3'];
    $cargoLinha4 = $_POST['textbox-cargo-linha-4'];
    $dataNascLinha1 = $_POST['textbox-data-nascimento-linha-1'];
    $dataNascLinha2 = $_POST['textbox-data-nascimento-linha-2'];
    $dataNascLinha3 = $_POST['textbox-data-nascimento-linha-3'];
    $dataNascLinha4 = $_POST['textbox-data-nascimento-linha-4'];
    $comentario = $_POST['textarea-comentario'];

    $conteudo .= "
    <p><b>Nome:</b> " . $nome . "</p>";
    $conteudo .= "
    <p><b>Nome fantasia:</b> " . $nomeFantasia . "</p>";
    $conteudo .= "
    <p><b>CNPJ / RG:</b> " . $cnpjRg . "</p>";
    $conteudo .= "
    <p><b>Endereço de instalação:</b> " . $endInstalacao . "</p>";
    $conteudo .= "
    <p><b>Bairro:</b> " . $bairro . "</p>";
    $conteudo .= "
    <p><b>Estado:</b> " . $estado . "</p>";
    $conteudo .= "
    <p><b>Cidade:</b> " . $cidade . "</p>";
    $conteudo .= "
    <p><b>CEP:</b> " . $cep . "</p>";
    $conteudo .= "
    <p><b>Contato:</b> " . $contato . "</p>";
    $conteudo .= "
    <p><b>Telefone:</b> " . $telefone . "</p>";
    $conteudo .= "
    <p><b>E-mail:</b> " . $email . "</p>";
    $conteudo .= "
    <p><b>Nome completo 1ª usuário:</b> " . $nomeCompletoLinha1 . "</p>";
    $conteudo .= "
    <p><b>Nome completo 2ª usuário:</b> " . $nomeCompletoLinha2 . "</p>";
    $conteudo .= "
    <p><b>Nome completo 3ª usuário:</b> " . $nomeCompletoLinha3 . "</p>";
    $conteudo .= "
    <p><b>Nome completo 4ª usuário:</b> " . $nomeCompletoLinha4 . "</p>";
    $conteudo .= "
    <p><b>Telefone residencial 1ª usuário:</b> " . $nomeCompletoLinha1 . "</p>";
    $conteudo .= "
    <p><b>Telefone residencial 2ª usuário:</b> " . $nomeCompletoLinha2 . "</p>";
    $conteudo .= "
    <p><b>Telefone residencial 3ª usuário:</b> " . $nomeCompletoLinha3 . "</p>";
    $conteudo .= "
    <p><b>Telefone residencial 4ª usuário:</b> " . $nomeCompletoLinha4 . "</p>";
    $conteudo .= "
    <p><b>Telefone móvel 1ª usuário:</b> " . $nomeCompletoLinha1 . "</p>";
    $conteudo .= "
    <p><b>Telefone móvel 2ª usuário:</b> " . $nomeCompletoLinha2 . "</p>";
    $conteudo .= "
    <p><b>Telefone móvel 3ª usuário:</b> " . $nomeCompletoLinha3 . "</p>";
    $conteudo .= "
    <p><b>Telefone móvel 4ª usuário:</b> " . $nomeCompletoLinha4 . "</p>";
    $conteudo .= "
    <p><b>Horário de segunda à sexta-feira:</b> " . $horarioSegSex . "</p>";
    $conteudo .= "
    <p><b>Horário de sábado:</b> " . $horarioSab . "</p>";
    $conteudo .= "
    <p><b>Horário de domingo e feriado:</b> " . $horarioDomFeriado . "</p>";
    $conteudo .= "
    <p><b>Nome completo / Painel de alarme / 1ª usuário:</b> " . $nomeCompletoPainel1 . "</p>";
    $conteudo .= "
    <p><b>Nome completo / Painel de alarme / 2ª usuário:</b> " . $nomeCompletoPainel2 . "</p>";
    $conteudo .= "
    <p><b>Nome completo / Painel de alarme / 3ª usuário:</b> " . $nomeCompletoPainel3 . "</p>";
    $conteudo .= "
    <p><b>Nome completo / Painel de alarme / 4ª usuário:</b> " . $nomeCompletoPainel4 . "</p>";
    $conteudo .= "
    <p><b>Cargo / Painel de alarme / 1ª usuário:</b> " . $cargoLinha1 . "</p>";
    $conteudo .= "
    <p><b>Cargo / Painel de alarme / 2ª usuário:</b> " . $cargoLinha2 . "</p>";
    $conteudo .= "
    <p><b>Cargo / Painel de alarme / 3ª usuário:</b> " . $cargoLinha3 . "</p>";
    $conteudo .= "
    <p><b>Cargo / Painel de alarme / 4ª usuário:</b> " . $cargoLinha4 . "</p>";
    $conteudo .= "
    <p><b>Data de nascimento / Painel de alarme / 1ª usuário:</b> " . $dataNascLinha1 . "</p>";
    $conteudo .= "
    <p><b>Data de nascimento / Painel de alarme / 2ª usuário:</b> " . $dataNascLinha2 . "</p>";
    $conteudo .= "
    <p><b>Data de nascimento / Painel de alarme / 3ª usuário:</b> " . $dataNascLinha3 . "</p>";
    $conteudo .= "
    <p><b>Data de nascimento / Painel de alarme / 4ª usuário:</b> " . $dataNascLinha4 . "</p>";
    $conteudo .= "
    <b>Comentário:</b> <pre>" . $comentario . "</pre>";

    $data_atual = date('d/m/Y H:i:s');
    $nome_remetente = "Atualização de cadastro - Grupo Patriarca";
    $email_remetente .= "vendas@grupopatriarca.com.br";
    $assunto = "Contato Grupo Patriarca " . $data_atual;
    $header .= "Content-type: text/html; charset=utf-8" . $quebra_linha;
    $header .= "X-Priority: 1" . $quebra_linha;
    $header .= "From: " . $email_remetente . $quebra_linha;

    if (!mail($destinatario, $assunto, $conteudo, $header, "-r" . $destinatario)) {
        mail($destinatario, $assunto, $conteudo, $header);
    }
    echo "<meta http-equiv='refresh' content='0;url=http://www.grupopatriarca.com.br/atualize-o-seu-cadastro/?enviado=1' />";
    ?>
    </head>
    <body>
    </body>
</html>