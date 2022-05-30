<<h3> Contact </h3>

<label for="lastName"> Nom:</label>
<input type="text" name="lastName" id="lastName" placeholder="Nom de famille">
<label for="firstName"> Prénom: </label>
<input type="text" name="firstName" id="firstName" placeholder="Prénom"><br>
<label for="dateOfBirth"> Date de naissance:</label>
<input type="datetime-local" id="dateOfBirth" name="birthdaytime">
<p>Choose your favourite Nintendo platform:</p>

<form method=POST>
  <input type="radio" id="gameboy" name="fav_platform" value="GameBoy">
  <label for="gameboy">GameBoy</label><br>
  <input type="radio" id="gba" name="fav_platform" value="GameBoy Advance/SP">
  <label for="gba">GameBoy Advance/SP</label><br>
  <input type="radio" id="nesSnes" name="fav_platform" value="Nes/SuperNes">
  <label for="nesSnes">Nes/SuperNes</label><br>
  <input type="radio" id="nin64" name="fav_platform" value="Nintendo 64">
  <label for="nin64">Nintendo 64</label><br>
  <input type="radio" id="wii" name="fav_platform" value="Wii/WiiU">
  <label for="wii">Wii/WiiU</label><br>
  <input type="radio" id="switch" name="fav_platform" value="Switch">
  <label for="switch">Switch</label><br>
</form> 


<p>Choose your favourite video game licences:</p>

<form method=POST>
  <input type="checkbox" id="mario" name="fav_licences" value="Super Mario & cie">
  <label for="mario">Super Mario & cie</label><br>
  <input type="checkbox" id="zelda" name="fav_licences" value="The Legend of Zelda">
  <label for="zelda">The Legend of Zelda</label><br>
  <input type="checkbox" id="dragonQuest" name="fav_licences" value="Dragon Quest">
  <label for="dragonQuest">Dragon Quest</label><br>
  <input type="checkbox" id="animalCrossing" name="fav_licences" value="Animal Crossing">
  <label for="animalCrossing">Animal Crossing</label><br>
  <input type="checkbox" id="pokemon" name="fav_licences" value="Pokémon">
  <label for="pokemon">Pokémon</label><br>
</form> 



<input type="submit" value="Submit">