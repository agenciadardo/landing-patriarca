<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Quicksand:400,700' />
        <link rel="stylesheet" href="css/styles.css" />
        <script src="js/scripts.js"></script>
        <title>Grupo Patriarca : Atualização de cadastro</title>
    </head>

<?php if (empty($_GET['enviado'])) { ?>
    <body>
<?php }
else { ?>
    <body onload="window.alert('Cadastro enviado com sucesso!\n\n Obrigado!');">
<?php } ?>
        <div id="container">
            
            <div id="cabecalho">

                <div class="linha-um">
                    <!--[if lt IE 9]>
                        <img src="imagens/texto_cabecalho.png" alt="" />
                    <![endif]-->

                    <!--[if !IE]><!-->
                    <h1>
                        Atualize o seu cadastro
                    </h1>
                    <!--<![endif]-->
                </div>

                <div class="linha-dois">
                    <h2>
                        e aproveite as nossas vantagens para você.
                    </h2>
                </div>

            </div>

            <div id="formulario-cadastro">

                <div class="cabecalho-formulario">
                    <h1>
                        Ficha de Atualização Cadastral
                    </h1>
                </div>

                <div class="formularios">
                        <form method="post" action="cadastrar.php">
                            <div class="formulario-cadastro-inicial">
                                <label for="textbox-nome">Nome: </label>
                                <input id="textbox-nome" 
                                       type="text" 
                                       name="textbox-nome" /><br />

                                <label for="textbox-nome-fantasia">Nome fantasia: </label>
                                <input id="textbox-nome-fantasia" 
                                       type="text" 
                                       name="textbox-nome-fantasia" />
                                
                                <label for="textbox-cnpj-rg">CNPJ/RG: </label>
                                <input id="textbox-cnpj-rg" 
                                       type="text" 
                                       name="textbox-cnpj-rg" /><br />
                                
                                <label for="textbox-endereco-instalacao">End. de instalação: </label>
                                <input id="textbox-endereco-instalacao" 
                                       type="text" 
                                       name="textbox-endereco-instalacao" />

                                <label for="textbox-bairro">Bairro: </label>
                                <input id="textbox-bairro" 
                                       type="text" 
                                       name="textbox-bairro" /><br />

                                <label for="textbox-estado">Estado: </label>
                                <input id="textbox-estado" 
                                       type="text" 
                                       name="textbox-estado" />

                                <label for="textbox-cidade">Cidade: </label>
                                <input id="textbox-cidade" 
                                       type="text" 
                                       name="textbox-cidade" />

                                <label for="textbox-cep">CEP: </label>
                                <input id="textbox-cep" 
                                       type="text"
                                       name="textbox-cep" /><br />

                                <label for="textbox-nome-contato">Nome do contato: </label>
                                <input id="textbox-nome-contato" 
                                       type="text"
                                       name="textbox-nome-contato" /><br />

                                <label for="textbox-telefone">Telefone: </label>
                                <input id="textbox-telefone"
                                       type="text" 
                                       name="textbox-telefone" />

                                <label for="textbox-email">E-mail: </label>
                                <input id="textbox-email"
                                       type="text" 
                                       name="textbox-email" />
                        </div>

                        <div class="formulario-comunicar-pessoas">
                            <h1>
                                Pessoas a serem comunicadas por ordem 
                                de prioridade no caso de sinais de alarme
                            </h1>

                            <table class="tabela-comunicar-pessoas">
                                <tr class="tabela-comunicar-pessoas-linha-1">
                                    <td class="tabela-nome-completo">
                                        <label for="textbox-nome-completo-linha-1">
                                            Nome completo
                                        </label>
                                    </td>

                                    <td class="tabela-ddd">
                                        <label for="textbox-telefone-residencial-linha-1">
                                            DDD
                                        </label>
                                    </td>

                                    <td class="tabela-telefone-residencial">
                                        <label for="textbox-telefone-residencial-linha-1">
                                            Telefone residencial
                                        </label>
                                    </td>

                                    <td class="tabela-telefone-movel">
                                        <label for="textbox-telefone-movel-linha-1">
                                            Telefone móvel
                                        </label>
                                    </td>
                                </tr>
                            </table>

                            <table class="tabela-comunicar-pessoas-conteudo">
                                <!-- Linha 1 -->
                                <tr>
                                    <td class="tabela-coluna-escura">
                                        <label for="textbox-nome-completo-linha-1">
                                            1º
                                        </label>
                                    </td>

                                    <td>
                                        <input id="textbox-nome-completo-linha-1" 
                                               type="text" 
                                               name="textbox-nome-completo-linha-1" />
                                    </td>

                                    <td class="tabela-coluna-escura">
                                        <label for="textbox-telefone-residencial-linha-1">
                                            11
                                        </label>
                                    </td>

                                    <td>
                                        <input id="textbox-telefone-residencial-linha-1"
                                               type="text"
                                               name="textbox-telefone-residencial-linha-1" />
                                    </td>

                                    <td>
                                        <input id="textbox-telefone-movel-linha-1"
                                               type="text"
                                               name="textbox-telefone-movel-linha-1" />

                                    </td>
                                </tr>

                                <!-- Linha 2 -->
                                <tr>
                                    <td class="tabela-coluna-escura">
                                        <label for="textbox-nome-completo-linha-2">
                                            2º
                                        </label>
                                    </td>

                                    <td>
                                        <input id="textbox-nome-completo-linha-2" 
                                               type="text" 
                                               name="textbox-nome-completo-linha-2" />
                                    </td>

                                    <td class="tabela-coluna-escura">
                                        <label for="textbox-telefone-residencial-linha-2">
                                            11
                                        </label>
                                    </td>

                                    <td>
                                        <input id="textbox-telefone-residencial-linha-2"
                                               type="text"
                                               name="textbox-telefone-residencial-linha-2" />
                                    </td>

                                    <td>
                                        <input id="textbox-telefone-movel-linha-2"
                                               type="text"
                                               name="textbox-telefone-movel-linha-2" />

                                    </td>
                                </tr>

                                <!-- Linha 3 -->
                                <tr>
                                    <td class="tabela-coluna-escura">
                                        <label for="textbox-nome-completo-linha-3">
                                            3º
                                        </label>
                                    </td>

                                    <td>
                                        <input id="textbox-nome-completo-linha-3" 
                                               type="text" 
                                               name="textbox-nome-completo-linha-3" />
                                    </td>

                                    <td class="tabela-coluna-escura">
                                        <label for="textbox-telefone-residencial-linha-3">
                                            11
                                        </label>
                                    </td>

                                    <td>
                                        <input id="textbox-telefone-residencial-linha-3"
                                               type="text"
                                               name="textbox-telefone-residencial-linha-3" />
                                    </td>

                                    <td>
                                        <input id="textbox-telefone-movel-linha-3"
                                               type="text"
                                               name="textbox-telefone-movel-linha-3" />

                                    </td>
                                </tr>

                                <!-- Linha 4 -->
                                <tr>
                                    <td class="tabela-coluna-escura">
                                        <label for="textbox-nome-completo-linha-4">
                                            4º
                                        </label>
                                    </td>

                                    <td>
                                        <input id="textbox-nome-completo-linha-4" 
                                               type="text" 
                                               name="textbox-nome-completo-linha-4" />
                                    </td>

                                    <td class="tabela-coluna-escura">
                                        <label for="textbox-telefone-residencial-linha-4">
                                            11
                                        </label>
                                    </td>

                                    <td>
                                        <input id="textbox-telefone-residencial-linha-4"
                                               type="text"
                                               name="textbox-telefone-residencial-linha-4" />
                                    </td>

                                    <td>
                                        <input id="textbox-telefone-movel-linha-4"
                                               type="text"
                                               name="textbox-telefone-movel-linha-4" />

                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="formulario-arme-desarme">
                            <h1>
                                Horário de arme e desarme do sistema
                            </h1>

                            <label for="textbox-horario-seg-a-sex">
                                Segunda à sexta-feira:
                            </label>

                            <input id="textbox-horario-seg-a-sex"
                                   type="text"
                                   name="textbox-horario-seg-a-sex" /><br />

                            <label for="textbox-horario-sab">
                                Sábado:
                            </label>

                            <input id="textbox-horario-sab"
                                   type="text"
                                   name="textbox-horario-sab" />

                            <label for="textbox-dom-e-feriado">
                                Domingo e feriado:
                            </label>

                            <input id="textbox-dom-e-feriado"
                                   type="text"
                                   name="textbox-dom-e-feriado" />
                        </div>

                        <div class="formulario-painel-de-alarme">
                            <h1>
                                Cadastro dos usuários do painel de alarme
                            </h1>
                            
                            <h2>
                                (Este cadastro é definido pela posição do usuário no
                                teclado de acesso).
                            </h2>

                            <table>
                                <tr class="tabela-painel-de-alarme-linha-1">
                                    <td class="tabela-usuario">
                                        <label for="textbox-nome-completo-painel-linha-1">
                                            Usuário
                                        </label>
                                    </td>

                                    <td class="tabela-nome-completo-painel">
                                        <label for="textbox-nome-completo-painel-linha-1">
                                            Nome completo
                                        </label>
                                    </td>

                                    <td class="tabela-cargo">
                                        <label for="textbox-cargo-linha-1">
                                            Cargo
                                        </label>
                                    </td>

                                    <td class="tabela-data-nascimento">
                                        <label for="textbox-data-nascimento-linha-1">
                                            Data de nasc.
                                        </label>
                                    </td>
                                </tr>

                                <!-- Linha 1 -->
                                <tr>
                                    <td class="tabela-coluna-escura">
                                        <label for="textbox-nome-completo-painel-linha-1">
                                            1º
                                        </label>
                                    </td>

                                    <td>
                                        <input id="textbox-nome-completo-painel-linha-1"
                                               type="text"
                                               name="textbox-nome-completo-painel-linha-1" />
                                    </td>

                                    <td>
                                        <input id="textbox-cargo-linha-1"
                                               type="text"
                                               name="textbox-cargo-linha-1" />

                                    </td>

                                    <td>
                                        <input id="textbox-data-nascimento-linha-1"
                                               type="text"
                                               name="textbox-data-nascimento-linha-1" />
                                    </td>
                                </tr>

                                <!-- Linha 2 -->
                                <tr>
                                    <td class="tabela-coluna-escura">
                                        <label for="textbox-nome-completo-painel-linha-2">
                                            2º
                                        </label>
                                    </td>

                                    <td>
                                        <input id="textbox-nome-completo-painel-linha-2"
                                               type="text"
                                               name="textbox-nome-completo-painel-linha-2" />
                                    </td>

                                    <td>
                                        <input id="textbox-cargo-linha-2"
                                               type="text"
                                               name="textbox-cargo-linha-2" />

                                    </td>

                                    <td>
                                        <input id="textbox-data-nascimento-linha-2"
                                               type="text"
                                               name="textbox-data-nascimento-linha-2" />
                                    </td>
                                </tr>

                                <!-- Linha 3 -->
                                <tr>
                                    <td class="tabela-coluna-escura">
                                        <label for="textbox-nome-completo-painel-linha-3">
                                            3º
                                        </label>
                                    </td>

                                    <td>
                                        <input id="textbox-nome-completo-painel-linha-3"
                                               type="text"
                                               name="textbox-nome-completo-painel-linha-3" />
                                    </td>

                                    <td>
                                        <input id="textbox-cargo-linha-3"
                                               type="text"
                                               name="textbox-cargo-linha-3" />

                                    </td>

                                    <td>
                                        <input id="textbox-data-nascimento-linha-3"
                                               type="text"
                                               name="textbox-data-nascimento-linha-3" />
                                    </td>
                                </tr>

                                <!-- Linha 4 -->
                                <tr>
                                    <td class="tabela-coluna-escura">
                                        <label for="textbox-nome-completo-painel-linha-4">
                                            4º
                                        </label>
                                    </td>

                                    <td>
                                        <input id="textbox-nome-completo-painel-linha-4"
                                               type="text"
                                               name="textbox-nome-completo-painel-linha-4" />
                                    </td>

                                    <td>
                                        <input id="textbox-cargo-linha-4"
                                               type="text"
                                               name="textbox-cargo-linha-4" />

                                    </td>

                                    <td>
                                        <input id="textbox-data-nascimento-linha-4"
                                               type="text"
                                               name="textbox-data-nascimento-linha-4" />
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="formulario-comentario">
                            <h1>
                                Sua opinião é muito importante, deixe o seu comentário
                            </h1>

                            <textarea class="textarea-comentario" name="textarea-comentario">

                            </textarea>
                        </div>

                        <div class="enviar">
                            <input class="botao-enviar"
                                   type="submit"
                                   name="botao-enviar"
                                   value="Enviar formulário" />
                        </div>
                    </form>
                </div>

            </div>

            <div id="rodape">

                <div class="rodape-logotipo">
                    <img src="imagens/logotipo.jpg" alt="" />
                </div>

                <div class="rodape-contato">
                    <h1>
                        Contato: <br />
                        <span>
                            tel: 55 (11) 3586-6600 
                        </span>
                    </h1>
                    <a href="http://www.grupopatriarca.com.br">www.grupopatriarca.com.br</a>
                </div>
            </div>

        </div>
    </body>
</html>