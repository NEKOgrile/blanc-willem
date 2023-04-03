# controle

Willem Cornil est le chef de projet en charge du serveur,
tandis qu'Alice Marcaillou est en charge de l'assistance pour les clients.

---

Ce contrôle doit avoir une interface utilisateur qui permette d'enregistrer les informations dans une base de données contenant les noms et adresses e-mail des utilisateurs. La table devra être structurée comme suit :

# | Id | Nom | Adresse e-mail |

En utilisant AJAX, lors de l'envoi des informations au serveur, le code devra vérifier si l'adresse e-mail existe déjà dans la base de données. Si c'est le cas, un message d'erreur sera renvoyé et affiché en temps réel sur la page, sans avoir besoin de la recharger. Cela est possible grâce à la nature asynchrone de JavaScript et d'XML.

En revanche, si l'adresse e-mail n'existe pas encore dans la base de données, elle sera ajoutée et un message de confirmation sera renvoyé, indiquant que l'utilisateur a bien été inscrit.

Malheureusement, je n'ai pas eu le temps de réaliser la partie bonus du travail pratique car j'ai manqué de temps.
