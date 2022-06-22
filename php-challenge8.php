<form  action="thanks.php" method="post">
    <div>
      <label for="name">Nom :</label>
      <input type="text"  id="name"  name="user_name">
    </div>
    <div>
      <label for="firstname">Prénom :</label>
      <input type="text"  id="firstname"  name="user_firstname">
    </div>
    <div>
      <label  for="email">Courriel :</label>
      <input  type="email"  id="email"  name="user_email">
    </div>
    <div>
      <label  for="tel_number">Téléphone :</label>
      <input  type="tel"  id="tel_number"  name="user_tel_number">
    </div>
    <div>
      <label  for="theme">Choix du thème :</label>
      <select name="user_theme_choice" id="theme">
        <option value="voitures">voitures</option>
        <option value="voyages">voyages</option>
        <option value="logement">immobilier</option>
      </select>  
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>