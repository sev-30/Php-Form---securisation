# Php-Form---securisation
Quest 1.2

Challenge
Sécuriser la prise de contact

À partir de ce que tu as réalisé lors de la précédente quête, tu vas pouvoir aller plus loin dans l’amélioration de ce formulaire. Comme tu dois t’en douter, tu vas devoir rajouter une partie validation des informations fournies par l’utilisateur.

Ainsi, tous les champs doivent être obligatoirement remplis avant de pouvoir soumettre le formulaire. Une fois le formulaire soumis :

Si toutes les données attendues sont saisies correctement, l’utilisateur voit apparaître le message précédemment intégrer lors de la quête précédente sur le fichier thanks.php.
En cas d'erreur, l'utilisateur est notifié par un message lui indiquant qu’il manque des informations ou que le format des données n’est pas bon, toujours sur thanks.php. Ne cherche pas à afficher les erreurs sur form.php pour le moment.

Critères de validation

    Le formulaire de contact comporte toujours les champs :
    nom,
    prénom,
    e-mail,
    téléphone,
    sujet (sous forme de liste déroulante)
    message (textarea).

Côté PHP :
Tous les champs sont requis et ne doivent pas être vides. Le format du champ e-mail doit être en plus vérifié à l'aide de filter_var.

Côté client / front :

Tous les champs sont requis. De plus, la validité du champ e-mail est également vérifiée pour correspondre au format attendu.

Le code est disponible sur un dépot Github.
