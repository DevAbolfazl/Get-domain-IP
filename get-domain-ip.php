<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get domain IP</title>
    <style type="text/css" rel="stylesheet">
        *{box-sizing:border-box;margin:0;padding:0}
        h1,h2,h3,h4,h5,h6{text-align:center}
        h1{font-family:Tahoma;font-size:50px}
        h2{font-size:30px}
        a{color:#000;text-decoration:none}
        input{font-family:monospace}
        .main-div form{width:45%;margin:0 auto}
        .main-div form input{width:100%}
        .result{font-size:17px;text-align:center;display:block}
    </style>
</head>
<body>
<br><br><br>
    <div class="main-div">
        <h1><a href="https://srctak.ir/">Source Tak</a></h1>
        <h2><code>Get domain IP</code></h2>
        <h5><code>Made in Iran</code></h5>
        <br>
        <form name="get-ip-form" action="get-domain-ip.php" method="post">
            <input type="text" name="domain" placeholder="Enter domain (e.g. web-learner.ir)">
            <input type="submit" name="submit" value="Show IP" style="margin-top: 10px;">
            <br><br>
            <?php

            if(isset($_POST["submit"]) && $_POST["domain"] != null)
            {
                echo "<code class='result'>".gethostbyname($_POST["domain"])."</code>";
            }

            ?>
        </form>
    </div>
</body>
</html>
