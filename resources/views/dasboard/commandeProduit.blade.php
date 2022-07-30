<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tableau de board</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="/css/main.css" rel="stylesheet" />
        <link href="/css/stockProduit.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark" id="navbar">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html"> <img class="logo" src="img/logo_mbd.png"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
              
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Deconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                         <div class="nav">
                            {{-- <div class="sb-sidenav-menu-heading">Core</div> --}}
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tableau de board
                            </a>
                            <div class="sb-sidenav-menu-heading">Interfaces</div>

                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentification
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login">Connexion</a>
                                    <a class="nav-link" href="register">Inscription</a>
                                    <a class="nav-link" href="password">Forgot Password</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed"  data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Produits/Stock
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Ajout produit</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Stock</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseVentes" aria-expanded="false" aria-controls="pagesCollapseVentes">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Ventes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseVentes" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">Liste des produits vendu</a>
                                </nav>
                            </div>

                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseClients" aria-expanded="false" aria-controls="pagesCollapseClients">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Clients
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseClients" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">Ajout Client</a>
                                    <a class="nav-link" href="404.html">Liste des clients</a>
                                </nav>
                            </div>

                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseFournisseurs" aria-expanded="false" aria-controls="pagesCollapseFournisseurs">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns "></i></div>
                                    Fournisseurs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseFournisseurs" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">Ajout fournisseur</a>
                                    <a class="nav-link" href="404.html">Liste des fournisseurs</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseCommandes" aria-expanded="false" aria-controls="pagesCollapseCommandes">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Commandes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseCommandes" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">Liste des commandes</a>
                                </nav>
                            </div>

                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAchats" aria-expanded="false" aria-controls="pagesCollapseAchats">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Achats
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAchats" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">Liste des achats</a>
                                </nav>
                            </div>

                              <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseFacturations" aria-expanded="false" aria-controls="pagesCollapseFacturations">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Facturations
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseFacturations" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="401.html">Liste des factures</a>
                                </nav>
                            </div>
                          
                    </div>
                    <div class="sb-sidenav-footer">
                        {{-- <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div> --}}
                </nav>
            </div>
            <div id="layoutSidenav_content">
             <main>

                <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();
                });
                </script>
             
                <div class="container-xl">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8"><h2>Liste des <b>Commande</b></h2></div>
                                    <div class="col-sm-4">
                                        <div class="search-box">
                                            <i class="material-icons">&#xE8B6;</i>
                                            <input type="text" class="form-control" placeholder="Search&hellip;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover table-bordered">
                                <thead>

                                    <tr>
                                        <th>Numero_commande</th>
                                        <th>description</th>
                                        <th>date_commande</th>
                                        <th>numero_livraison</th>
                                        <th>fournisseur_id</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                 @foreach ($commandeProduits as $commandeProduit)
                                <tbody>
                                    <tr>
                                        <td>{{$commandeProduit->numero_commande }}</td>
                                        <td>{{$commandeProduit->description }}</td>
                                        <td>{{$commandeProduit->date_commande }}</td>
                                        <td>{{$commandeProduit->date_livraison }}</td>
                                        <td>{{$commandeProduit->fournisseur_id }}</td>
                                    

                                        <td>
                                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                        </td>
                                    </tr>

                                </tbody>

                                @endforeach

                            </table>
                            <div class="clearfix">
                                <div class="hint-text">Montrant <b>5</b> out of <b>25</b> entrées</div>
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
             
     
                </main>
                {{-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer> --}}
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="demo/chart-area-demo.js"></script>
        <script src="demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
