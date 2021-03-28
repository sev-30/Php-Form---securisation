<?php
$data = array_map('trim', $_POST);
$errors= [];

if (empty($data['nom'])) {
    $errors[] = 'le nom est obligatoire';
}

if (empty($data['prenom'])) {
    $errors[] = 'le prénom est obligatoire';
}

if(!filter_var($data('e-mail'), FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'le format e-mail est invalide';
}

if (empty($data['telephone'])) {
    $errors[] = 'le téléphone est obligatoire';
}

if (empty($data['sujet'])) {
    $errors[] = 'le sujet est obligatoire';
}

if (empty($data['message'])) {
    $errors[] = 'le message doit être renseigné';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
<?php if (!empty($errors)) { ?>
<p>Merci <?php echo  $_POST['user_prénom'];?> <?php echo  $_POST['user_name'];?> de nous avoir contacté à propos de : <?php echo  $_POST['user_sujet'];?>.

Un de nos conseiller vous contactera soit à l’adresse <?php echo  $_POST['user_email'];?> ou par téléphone au <?php echo  $_POST['user_téléphone'];?> dans les plus brefs délais pour traiter votre demande : 

<?php echo  $_POST['user_message'];?></p>
<?php } else { ?>
<p> votre formulaire est incomplet, merci de remplir les champs</p> 
   <ul class="error">
   <?php foreach ($errors as $error) : ?>
      <li<?= $error ?></li>
   <?php endforeach; } ?>  
     </ul>
  </body>
</html>
