<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<meta charset="UTF-8" />

<title>exo 3</title>

<link rel="stylesheet" media="screen" type="text/css" href="main.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
    <script>
        fetch("https://yesno.wtf/api")
            .then(response => response.json())
            .then(data => {
                // Convertir les données JSON en chaîne de caractères
                const jsonData = JSON.stringify(data);

                // Envoyer une requête POST vers main.php avec les données
                fetch("main.php", {
                    method: "POST",
                    body: jsonData,
                    headers: {
                        "Content-Type": "application/json"
                    }
                }).then(response => response.json());

            });

    </script>

</body>