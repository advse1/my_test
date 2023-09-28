<?php
    
function getClientIP()
{
    if (getenv('HTTP_CLIENT_IP')) {
        $ip = getenv('HTTP_CLIENT_IP');
    } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
        $ip = getenv('HTTP_X_FORWARDED_FOR');
    } elseif (getenv('HTTP_X_FORWARDED')) {
        $ip = getenv('HTTP_X_FORWARDED');
    } elseif (getenv('HTTP_FORWARDED_FOR')) {
        $ip = getenv('HTTP_FORWARDED_FOR');
    } else if (getenv('HTTP_FORWARDED')) {
        $ip = getenv('HTTP_FORWARDED');
    } elseif (getenv('REMOTE_ADDR')) {
        $ip = getenv('REMOTE_ADDR');
    }
    return $ip;
}

if (isset($_POST['name'], $_POST['phone'])) {
    $data = array(
        'phone' => $_POST['phone'],
        'name' => $_POST['name'],
        'ip' => getClientIP(),
        'flow_id' => '59i4kt67ec',
        'geo' => '25395',
    );
    foreach ($_POST as $key => $value) {
        $data[$key] = $value;
    }
    $ch = curl_init('http://metacpa.ru/create');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_exec($ch);
    curl_close($ch);
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>شكرا!</title>
    <style>
        html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}strong{font-weight:700}h1{margin:.67em 0;font-size:2em}button,input{margin:0;font:inherit;color:inherit}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button;cursor:pointer}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */@media print{*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important}p{orphans:3;widows:3}}@font-face{font-family:'Glyphicons Halflings';src:url(../fonts/glyphicons-halflings-regular.eot);src:url(../fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(../fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(../fonts/glyphicons-halflings-regular.woff) format('woff'),url(../fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}button,input{font-family:inherit;font-size:inherit;line-height:inherit}h1{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1{margin-top:20px;margin-bottom:10px}h1{font-size:36px}p{margin:0 0 10px}.text-center{text-align:center}.text-uppercase{text-transform:uppercase}.container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-right:-15px;margin-left:-15px}.col-lg-6,.col-md-8,.col-sm-10,.col-sm-2,.col-xs-12{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-12{float:left}.col-xs-12{width:100%}@media (min-width:768px){.col-sm-10,.col-sm-2{float:left}.col-sm-10{width:83.33333333%}.col-sm-2{width:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}}@media (min-width:992px){.col-md-8{float:left}.col-md-8{width:66.66666667%}.col-md-offset-2{margin-left:16.66666667%}}@media (min-width:1200px){.col-lg-6{float:left}.col-lg-6{width:50%}.col-lg-offset-3{margin-left:25%}}label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control::-ms-expand{background-color:transparent;border:0}.form-group{margin-bottom:15px}.form-horizontal .form-group{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.form-horizontal .control-label{padding-top:7px;margin-bottom:0;text-align:right}}.btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px}.btn:active:focus,.btn:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn:focus,.btn:hover{color:#333;text-decoration:none}.btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}.btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4}.btn-primary:focus{color:#fff;background-color:#286090;border-color:#122b40}.btn-primary:hover{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary:active{color:#fff;background-color:#286090;border-color:#204d74}.btn-primary:active:focus,.btn-primary:active:hover{color:#fff;background-color:#204d74;border-color:#122b40}.btn-primary:active{background-image:none}.btn-lg{padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.container:after,.container:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.row:after,.row:before{display:table;content:" "}.container:after,.form-horizontal .form-group:after,.row:after{clear:both}@-ms-viewport{width:device-width}
        .icon{width: 100px;}
    </style>    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        h1 {font-size: 48px;}
        p {font-size: 24px;}
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 text-center">
                <h1 class="text-uppercase"><strong>شكرا!</strong></h1>
                <img class="icon" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSIwIDAuMDA3OTk1NjEwMTI1MzYyODcgMTM2Ljc2MTAwMTU4NjkxNCAxMDcuOTkyMDA0Mzg5ODc1IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZGVmcz48bGluZWFyR3JhZGllbnQgaWQ9ImRlZjAiIHgxPSIwLjUwMDAwNSIgeDI9IjAuNTAwMDA1IiB5MT0iMS42NDI0NiIgeTI9Ii0wLjEzOTQ5MyI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjMDA0NDAwIi8+PHN0b3Agb2Zmc2V0PSIwLjUxMDk4OSIgc3RvcC1jb2xvcj0iIzAxOEMwMSIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzkxQ0Q5MSIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJkZWYxIiB4MT0iLTUuMzc0MjZFLTA2IiB4Mj0iMC45OTk5OTciIHkxPSIwLjQ5OTk5NiIgeTI9IjAuNDk5OTk2Ij48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiNGRkZGRkYiIHN0eWxlPSJzdG9wLW9wYWNpdHk6MC4zMDE5NjA3ODQzMTM3MjUiLz48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiNGRkZGRkYiIHN0eWxlPSJzdG9wLW9wYWNpdHk6MC4yIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PGc+PHBhdGggZD0iTTUyLjk4NCwxMDhMMCw1NS4wMDggMjMuMjczMywzMS43MzIgNTIuOTg1Myw2MS40NDI3IDExNC40MzIsMC4wMDc5OTU2MSAxMzYuNzYxLDIyLjM0MTMgMTM0Ljg3NSwyNC4yMjY3IDExNC40MzIsMy43Nzg2NiA1Mi45ODUzLDY1LjIxMzMgMjMuMjczMywzNS41MDI3IDMuNzcwNjcsNTUuMDA4IDU0Ljg2OTMsMTA2LjExNSA1Mi45ODQsMTA4eiIgZmlsbD0iIzAwNjYwMCIvPjxwYXRoIGQ9Ik0xMzUuODE4LDIzLjI4NDVMMTE0LjQzMywxLjg5Mzg2IDUyLjk4NjQsNjMuMzI4NSAyMy4yNzMxLDMzLjYxNzkgMS44ODUwNyw1NS4wMDg1IDIxLjE3MzEsNzQuMjk2NSAzNC41MjI0LDg3LjY1MjUgNTMuOTI2NCwxMDcuMDU4IiBmaWxsPSJ1cmwoI2RlZjApIi8+PHBhdGggZD0iTTUyLjk4NjQsNjMuMzI3MkwyMy4yNzQ0LDMzLjYxNzkgMS44ODY0LDU1LjAwODUgMjEuMTczMSw3NC4yOTY1IDMyLjE4NzcsODUuMzE3OUM0Ny4zNDc3LDc1Ljk3MzksNzIuNTkxNyw2Mi45ODcyLDEwMS41MTcsNTguMzczOUwxMzUuODE4LDIzLjI4NDUgMTE0LjQzMywxLjg5Mzg2IDUyLjk4NjQsNjMuMzI3MnoiIGZpbGw9InVybCgjZGVmMSkiLz48L2c+PC9zdmc+" alt="done" />
                <p>تم استلام شحنتك وسنعاود الاتصال بك قريبًا.</p>
        </div>
    </div>
</div>
<script src="https://minfobiz.online/js/381/5469IQ01_0v7.js"></script>
<?= ""; ?>
</body>
</html>