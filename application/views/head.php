<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap 101 Template</title>

            <!-- Bootstrap -->
            <link href="/ci/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <style>
                body { padding-top: 70px; }
            </style>
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

            <style>
                .form_control {
                    padding-top: 20px;
                }
            </style>
        </head>
    <body>
    <?php
    if($this->session->flashdata('message')){

    ?>
        <script>
            alert('<?=$this->session->flashdata('message')?>');
        </script>
    <?php

    }?>


    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/ci/index.php">JavaScript</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if($this->session->userdata('is_login')){
                    ?>
                        <li><a href="/ci/index.php/auth/logout">로그아웃</a></li>
                    <?php
                        } else {
                    ?>
                    <li><a href="/ci/index.php/auth/login">로그인</a></li>
                    <li><a href="/ci/index.php/auth/register">회원가입</a></li>
                    <?php
                        }
                    ?>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <?php
    if($this->config->item('is_dev')){
    ?>
    <div class="well col-md-12">
        개발환경을 수정중입니다.
    </div>
    <?php
    }
    ?>
    <div class="container-fluid">
        <div class="row">

