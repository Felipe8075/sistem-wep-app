<?php include_once("../CONEXOES/conexao.php")?>

<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- LINK'S EXTERNOS  -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../../Biblioteca/CSS/style.css" />
    <title>SOLICITAÇÕES</title>
  </head>
  <body>
  <div class="header_home_app">
            <div class="content_home_app">
                <div class="menu_nav_home_app">
                      <div class="navbar">
                        <div class="perfilcol">
                          <div class="photocol">
                            <img src="../../Biblioteca/img/90556502_238299827325438_3584425069239074816_n.jpg" alt="">
                          </div>
                          <div class="namecol">
                            Felipe Souza da Silva Suassuna
                          </div>
                      </div>
                    </div>
                </div>
                <div class="main_geral">
                  <p>Solicitar ah administração</p>
                  <div class="input-select">
                    <select required>
                      <option value="">Selecione o condomínio</option>
                      <option value="Ebj">Ebj</option>
                      <option value="Utinga">Utinga</option>
                      <option value="Advocacia Husni">Advocacia Husni</option>
                      <option value="Vila rica">Vila rica</option>
                      <option value="Pitangueiras">Pitangueiras</option>
                      <option value="Itajuibe">Itajuibe</option>
                      <option value="Aurora paulistana">Aurora paulistana</option>
                      <option value="Academia de São Paulo">Academia de São Paulo</option>
                      <option value="Vitória">Vitória</option>
                      <option value="Liga das senhoras">Liga das senhoras</option>
                      <option value="Ortodoxa">Ortodoxa</option>
                      <option value="Flor da montanha">Flor da montanha</option>>
                      <option value="Manuel bueno II">Manuel bueno</option>
                      <option value="Nascer do sol">Nascer do sol</option>
                      <option value="Viva vista itaquera">Viva vista itaquera</option>
                      <option value="Base escritório uniforte">Base escritório uniforte</option>
                    </select>
                  </div>
                  <div class="input-select">
                    <select name="funcionario_name">
                        <option value="">Selecione o funcionário</option>
                        <?php
                        $sql_funcionario = "SELECT * FROM register_functions_uniforte ORDER BY Nome_funcionario";
                        $result_select_funcionario = mysqli_query($conexao, $sql_funcionario);
                        while ($row_funcionario = mysqli_fetch_assoc($result_select_funcionario)) { ?>
                            <option value="<?php echo $row_funcionario['Nome_funcionario']; ?>">
                                <?php echo $row_funcionario['Nome_funcionario']; ?></option> <?php
                                                                                            }
                                                                                                ?>
                    </select>
                  </div>
                  <div class="input-select">
                    <select required>
                      <option value="">Selecione o tipo de solicitação</option>
                      <option value="EPY's">EPY's</option>
                      <option value="UNIFORMES">UNIFORMES</option>
                      <option value="EQUIPAMENTOS">EQUIPAMENTOS</option>
                      <option value="PRODUTOS DE LIMPEZA">PRODUTOS DE LIMPEZA</option>
                      <option value="OUTROS">OUTROS</option>
                    </select>
                  </div>
                </div>
                <div class="input-select">
                    <textarea name="" id=""></textarea>
                </div>
                
            </div>
        </div>

  </body>
</html>