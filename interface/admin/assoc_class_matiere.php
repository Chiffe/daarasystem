<!DOCTYPE html>
<!--[if IE 8]> <html lang="fr" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="fr" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fr">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8">
        <title>Admin | Associer des matières</title>
        <link rel="shortcut icon" href="../favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="ToDo" name="description">
        <meta content="Bew-Works" name="author">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
        <link href="../css/core/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../css/core/simple-line-icons.min.css" rel="stylesheet" type="text/css">
        <link href="../css/core/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../css/core/bootstrap-switch.min.css" rel="stylesheet" type="text/css">


        <!-- ***************************************************************************** -->
        <!--------------------------- CSS DES PLUGINS A RECUPERER --------------------------->
        <!-- ***************************************************************************** -->
        <link href="../css/plugins/toastr.min.css" rel="stylesheet" type="text/css">
        <link href="../css/plugins/multi-select.css" rel="stylesheet" type="text/css">
        <!----------------------- FIN DES CSS DES PLUGINS A RECUPERER ----------------------->


        <link href="../css/global/components.min.css" rel="stylesheet" type="text/css">
        <link href="../css/global/plugins.min.css" rel="stylesheet" type="text/css">
        <link href="../css/global/layout.min.css" rel="stylesheet" type="text/css">
        <link href="../css/global/green.min.css" rel="stylesheet" type="text/css">
        <link href="../css/main.css" rel="stylesheet" type="text/css">
    </head>
    <!-- END HEAD -->

    <body class="page-sidebar-fixed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="home.php">
                        <img src="../img/logo-default.png" alt="logo" class="logo-default"> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <?php include "top_actions.html"; ?>
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <?php include "menu.html"; ?>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">



                <!-- ******************************************************************************************************************************* -->
                <!------------------------------------------------------ CONTENU DE LA PAGE A RECUPERER ----------------------------------------------->
                <!-- ******************************************************************************************************************************* -->
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <h1 class="page-title font-green"> Admin
                        <small class="font-green">Associer des matières</small>
                    </h1>
                    <div class="alert alert-success fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                        Emplacement message pour visiteur
                    </div>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a class="font-green" href="home.php">Accueil</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a class="font-green" href="classes.php">Gestion des classes</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a class="font-green" href="assoc_class_matiere.php">Associer des matières</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!----------------- TEST BEW-WORKS A SUPPRIMER ------------------------------------------------------->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="mt-element-ribbon bg-grey-steel">
                                <div class="ribbon ribbon-shadow ribbon-color-danger uppercase ">Test Bew-Wokrs (A Supprimer)</div>
                                <div class="ribbon-content">
                                    <p>Résultat des requêtes AJAX (Permet de voir la gestion des erreurs)</p>
                                    <input id="bw_test" type="checkbox" class="make-switch" checked="" data-on-text="Success" data-off-text="Error" data-on-color="success" data-off-color="warning">
                                    <ul style="margin-top:10px;">
                                        <li>La classe "SECONDE A" n'a aucune matière associée</li>
                                        <li>La classe "SECONDE B" a différentes matières de différentes étapes associées</li>
                                        <li>La classe "SECONDE C" a toutes les matières de l'étape 3 associées</li>
                                    </ul>
                                    <p>Il est possible de cliquer sur le label d'une étape, pour sélectionner toutes les matières de cette dernière.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-green">
                                        <i class="icon-shuffle font-green"></i>
                                        <span class="caption-subject bold uppercase"> Associer des matières à une classe</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6 col-md-offset-3">
                                            <form role="form" action="undefined" method="post">
                                                <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
                                                <div class="form-body">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <select class="form-control" required="required" name="classe" id="classe">
                                                            <option value=""></option>
                                                            <option value="1">SECONDE A</option>
                                                            <option value="2">SECONDE B</option>
                                                            <option value="3">SECONDE C</option>
                                                        </select>
                                                        <label for="classe">Sélectionnez une classe*</label>
                                                    </div>
                                                    <div>
                                                        <legend>Associez les matières pour la classe</legend>
                                                        <select title="Matières" class="form-control" multiple="multiple" name="matieres[]" id="matieres">
                                                            <optgroup label="1ére étape">
                                                                <option value="1">Matière 1</option>
                                                                <option value="2">Matière 2</option>
                                                                <option value="3">Matière 3</option>
                                                            </optgroup>
                                                            <optgroup label="2éme étape">
                                                                <option value="4">Matière 4</option>
                                                                <option value="5">Matière 5</option>
                                                                <option value="6">Matière 6</option>
                                                                <option value="7">Matière 7</option>
                                                                <option value="8">Matière 8</option>
                                                            </optgroup>
                                                            <optgroup label="3éme étape">
                                                                <option value="9">Matière 9</option>
                                                                <option value="10">Matière 10</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-actions noborder">
                                                    <button type="submit" class="btn green">Enregistrer</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
                <!------------------------------------------------------ FIN CONTENU DE LA PAGE A RECUPERER ----------------------------------------------->



            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <?php include "../footer.php"; ?>
            <!-- END FOOTER -->
            <!--[if lt IE 9]>
            <script src="../js/core/respond.min.js"></script>
            <script src="../js/core/excanvas.min.js"></script>
            <script src="../js/core/ie8.fix.min.js"></script>
            <![endif]-->
            <!-- BEGIN CORE PLUGINS -->
            <script src="../js/core/jquery.min.js" type="text/javascript"></script>
            <script src="../js/core/bootstrap.min.js" type="text/javascript"></script>
            <script src="../js/core/js.cookie.min.js" type="text/javascript"></script>
            <script src="../js/core/jquery.slimscroll.min.js" type="text/javascript"></script>
            <script src="../js/core/jquery.blockui.min.js" type="text/javascript"></script>
            <script src="../js/core/bootstrap-switch.min.js" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->


            <!-- ***************************************************************************** -->
            <!---------------------------- JS DES PLUGINS A RECUPERER --------------------------->
            <!-- ***************************************************************************** -->
            <script src="../js/plugins/toastr.min.js" type="text/javascript"></script>
            <script src="../js/plugins/jquery.multi-select.js" type="text/javascript"></script>
            <!------------------------- FIN DES JS DES PLUGINS A RECUPERER ------------------------>


            <script src="../js/global/app.min.js" type="text/javascript"></script>
            <script src="../js/global/layout.min.js" type="text/javascript"></script>
            <script src="../js/main.js" type="text/javascript"></script>


            <!-- ***************************************************************************** -->
            <!---------------------------- JS SPECIFIQUES A RECUPERER --------------------------->
            <!-- ***************************************************************************** -->
            <script src="../js/admin/admin_assoc_class_matiere.js" type="text/javascript"></script>
            <!----------------------- FIN DES JS SPECIFIQUES A RECUPERER ----------------------->


        </div>
    </body>
</html>