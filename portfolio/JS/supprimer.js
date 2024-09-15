function suppression() {
    const buttons = document.getElementsByClassName("blocJDB");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener('click', function () {
            const id = buttons[i].id.slice(-1);
            const req = new XMLHttpRequest();

            req.open("POST", "traitement_suppression.php");

            req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            req.onreadystatechange = () => {
                if (req.readyState === XMLHttpRequest.DONE) {
                    const status = req.status;
                    if (status === 0 || (status >= 200 && status < 400)) {
                        document.getElementById('result').innerHTML = req.statusText;
                    } else {
                        console.error('Error:', req.status, req.statusText);
                    }
                }
            };
            const donnees = "id=" + encodeURIComponent(id); // Envoyer l'ID au serveur
            req.send(donnees);
        });
    }
}

