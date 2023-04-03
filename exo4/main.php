<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<meta charset="UTF-8" />

<title>exo 2</title>

<link rel="stylesheet" media="screen" type="text/css" href="main.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!DOCTYPE html>
<html>


<body>
    <h1>Page 1</h1>
    <form id="myForm">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
    <div id="json-div"></div>


    <script>
        const form = document.querySelector('#myForm');
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            const formData = new FormData(this);
            fetch('http://192.168.68.12/cours/git/exo3/blanc-willem/exo4/main2.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    console.log(data);
                    const json = JSON.parse(data);
                    const jsonDiv = document.getElementById("json-div");
                    jsonDiv.innerHTML = `
        <p>Nom: ${json.nom}</p>
        <p>Email: ${json.email}</p>
        ${json.info ? `<p>info: ${json.info}</p>` : ''}`;
                })
                .catch(error => {
                    console.error(error);
                });
        });

    </script>
</body>

</html>