<!DOCTYPE html>
<?php
$responseSize = strlen(trim($this->data['_content']));
$responseWidth = ( $responseSize > 1 && $responseSize < 8000 ) ? '6' : '12';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">


    <link href="/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-cover.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script src="/libs/jquery/dist/jquery.min.js"></script>
    <script src="/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?=$this->data['headerScripts']?>
</head>

<body>
<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="inner cover">
            <div class="container-fluid" style="max-width:900px">
                <div class="row">
                    <div class="col-xs-12 col-sm-<?=$responseWidth ?>">
                        <h2><?= $this->data['_contentFileName']?></h2>
                        <pre><?= $this->data['_contentSource']?>
                        </pre>
                    </div>
                    <?php if(!empty($responseSize)):?>
                        <div class="col-xs-12 col-sm-<?=$responseWidth ?>">
                            <h2>Response</h2>
                            <pre><?= $this->data['_content']?>
                            </pre>
                        </div>
                    <?php endif;?>
                </div>
                <?php if(($this->showErrorLog)):?>
                <div>
                    <small>Server's Error Log:</small>
                    <iframe id="error-log" name="error-log" width="100%" src="/show-error-log"></iframe>
                    <form class="navbar-form navbar-right">
                        <a class="btn btn-default navbar-btn" target="error-log" href="/show-error-log">refresh</a>
                        <a class="btn btn-default navbar-btn" target="error-log" href="/clear-error-log">clear</a>
                    </form>
                </div>
                <?php endif?>
            </div>
        </div>



    </div>

</div>

</div>
<a style="position:fixed; right:10px; top:10px;" href="javascript:window.location.reload(true)">Reload</a>

<!-- Placed at the end of the document so the pages load faster -->

<?=$this->data['footerScripts']?>
</body>
</html>
