<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Gönderici</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
          id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<div class="container">
    <form class="well span8" action="config.php" method="POST" style="width: 100%">
        <div class="row" >
            <div class="span3">
                <label> İsim</label> <input class="span3" placeholder=
                "İsminiz" type="text" name="isim">
                <label>Soyisim</label> <input class="span3" placeholder="Soyisminiz" type="text" name="soyisim"><br>
                <label>E-mail Adresi</label> <input class="span3" placeholder=
                "Mesajın iletileceği e-mail" type="text" name="mail">
            </div>

            <div class="span5">
                <label>Mesaj</label>
                <textarea class="input-xlarge span5" id="message" name="mesaj"
                          rows="9">
    </textarea>
                <button class="btn btn-primary pull-right" type=
                "submit">Gönder
                </button>
        </div>
    </form>
</div>
</body>
</html>