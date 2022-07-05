<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <!-- Ion Icons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </head>
    <body>

    <div class="conteiner-fluid">
        <!--header começo-->

        <div class="header row no-gutters">

            <div class="pesquisa col-md-4">
                <span>
                    <a href="#" id="cloud"><ion-icon name="cloud"></ion-icon></a>
                </span>

                <input type="search" name="" id="search" placeholder="Digite o que procura">
                <span class="botao"><ion-icon name="search-outline"></ion-icon></span>

            </div>
            <div class="docsti col-md-7">

                <div class="text-docsti"><span>DOCS TI</span><br><span>Data-base: 30/08/2022</span></div>

            </div>
            <div class="col-md-1">
                <div class="expandir">
                    <a href="#">
                        <ion-icon name="resize-outline"></ion-icon>
                    </a>
                </div>
                <div class="perfil">
                    <a href="#">
                        <ion-icon name="person-outline"></ion-icon>
                    </a>
                </div>

            </div>
        </div>
        <!--header final-->

        <!--sidebar começo-->
        <div class="sidebar">
            <a href="#" id="nuvem">
                <ion-icon name="cloud"></ion-icon>
            </a>
            <a href="#" class="item-menu">
                <ion-icon name="create-outline"></ion-icon>
            </a>
            <a href="#" class="item-menu">
                <ion-icon name="document-outline"></ion-icon>
            </a>
            <a href="#" class="item-menu">
                <ion-icon name="stats-chart-outline"></ion-icon>
            </a>
            <a href="#" class="item-menu">
                <ion-icon name="timer-outline"></ion-icon>
            </a>
            <a href="#" class="item-menu">
                <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
            </a>
            <a href="#" class="item-menu">
                <ion-icon name="cube-outline"></ion-icon>
            </a>
            <a href="#" class="item-menu">
                <ion-icon name="scan-outline"></ion-icon>
            </a>
            <a href="#" class="item-menu">
                <ion-icon name="bed-outline"></ion-icon>
            </a>
        </div>
        <!--sidebar final-->


        <!--content começo-->
        <div class="content">


            <div class="localizacao col-md12 align-self-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cadastro de Clientes</li>
                    </ol>
                    <div id="butoes">
                        <button type="button" class="btn btn-light">Voltar</button>
                        <button type="button" class="btn btn-light">Ajuda</button>
                    </div>

                </nav>


            </div>
            <hr>

            <!--crud cliente começo-->

            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row ">
                                <div class="col-sm-8">
                                    <button type="button" class="btn btn-primary">Incluir</button>
                                    <button type="button" class="btn btn-primary">Imprmir</button>
                                </div>
                                <div class="col-sm-4">

                                    <div class="butao-config">
                                        <button type="button" class="btn btn-primary"><ion-icon name="settings-outline"></ion-icon></button>
                                    </div>

                                    <div class="search-box">
                                        <i class="material-icons"></i>
                                        <input type="text" class="form-control form-control-sm" placeholder="Pesquisar">
                                    </div>


                                    <div class="filtro-pesquisa">
                                        <select id="inputEstado" class="form-control form-control-sm">
                                            <option selected>Nome</option>
                                            <option>Telefone</option>
                                            <option>E-mail</option>
                                          </select>
                                    </div>

                                </div>
                            </div>

                            <div class="row filtro">
                                <div class="col-sm-12">
                                    <span>> Filtros:</span><span class="filtro-selected">Nenhum</span>
                                </div>
                            </div>

                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nome <i class="fa fa-sort"></i></th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#" class="view" title="View" data-toggle="tooltip">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip">
                                            <ion-icon name="create-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </td>
                                    <td>Thomas Hardy</td>
                                    <td>(61) 98356-5278</td>
                                    <td>thomas33@gmai.com</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="view" title="View" data-toggle="tooltip">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip">
                                            <ion-icon name="create-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </td>
                                    <td>Maria Anders</td>
                                    <td>(55) 98675-4534</td>
                                    <td>maiaand4@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="view" title="View" data-toggle="tooltip">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip">
                                            <ion-icon name="create-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </td>
                                    <td>Fran Wilson</td>
                                    <td>(61) 98356-5278</td>
                                    <td>thomas33@gmai.com</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="view" title="View" data-toggle="tooltip">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip">
                                            <ion-icon name="create-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </td>
                                    <td>Dominique Perrier</td>
                                    <td>(55) 98675-4534</td>
                                    <td>maiaand4@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="view" title="View" data-toggle="tooltip">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip">
                                            <ion-icon name="create-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </td>
                                    <td>Martin Blank</td>
                                    <td>(61) 98356-5278</td>
                                    <td>thomas33@gmai.com</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="clearfix">
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!--content final-->

    </div>
        
        







    </body>
</html>
