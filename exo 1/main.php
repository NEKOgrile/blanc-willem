<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<meta charset="UTF-8" />

<title>je sais pas </title>

<link rel="stylesheet" media="screen" type="text/css" href="main.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
    <input type="button" value="je sais pas" onclick="newrole()">

    <!-- les containeur qui aparaisent quand on clique sur un bouton -->
    <div class="containeurnewrole" id="containeurnewroleid">
        <form action="" method="POST">
            <input class="item-boutton oui" type="submit" value="oui" name="newroleoui" />
            <div class="containeurelementnewrole">
                <p class="textprof">
                    nom du nouveau rôle
                </p>
                <input type="text" name="nomrole" placeholder="ici nom du rôle">
                <p class="textprof">
                    description du rôle a ajouter
                </p>
                <textarea class="" value="" name="descriptionrole" placeholder="ici la description"></textarea>
        </form>
    </div>

    <input class="item-boutton non" type="button" value="non" onclick="nonactionmodifierrole()" />


</body>

<script type="text/javascript" src="main.js"></script>