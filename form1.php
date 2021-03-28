<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href='style.css' type="text/css"/>
</head>
<body>
   <form  action="thanks.php"  method="post">
   <div>
   <label  for="nom">Nom :</label> 
         <input  type="text"  id="nom"  name="user_name" required>
</div>
     <div>
        <label  for="prenom">Prénom :</label>
         <input  type="text"  id="prenom"  name="user_prenom" required>
</div>
     <div>
         <label  for="e-mail">E-mail :</label>
         <input  type="email"  id="e-mail"  name="user_email" required>
</div>
     <div>
        <label  for="telephone">Téléphone :</label>
         <input  type="text"  id="telephone"  name="user_telephone" required>
</div> 
      <div>
         <label for="sujet">Choisissez un sujet :</label>
          <select id="sujet" name="user_sujet" required>
             <option value="sujet1">Sujet 1</option>
             <option value="sujet2">Sujet 2</option>
             <option value="sujet3">Sujet 3</option>
             <option value="sujet4">Sujet 4</option>
             <option value="sujet5">Sujet 5</option>
          </select> 
</div>
     <div>
         <label  for="message">Message :</label>
         <textarea  id="message"  name="user_message" required></textarea>
</div>
     <div  class="button">
         <button  type="submit">Envoyer votre message</button>
</div>

     </form>
   </body>
</html>

