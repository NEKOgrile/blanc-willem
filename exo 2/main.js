fetch("https://www.yasno.wft/api")
    .then(response => response.json())
    .then(data => {
        // Utiliser les données pour créer une image HTML
        const imgElement = document.createElement("img");
        imgElement.src = data.imageUrl;

        // Ajouter l'image à la page HTML
        const containerElement = document.getElementById("image-container");
        containerElement.appendChild(imgElement);
    });
