<<h3> Contact </h3>

<form method=POST>
  <label for="lastName"> Family Name:</label>
  <input type="text" name="lastName" id="lastName" placeholder="ex: Smith" required>
  <label for="firstName"> First Name: </label>
  <input type="text" name="firstName" id="firstName" placeholder="ex: Jane" required><br>
  <br>
  <label for="email">Enter your email:</label>
  <input type="email" id="email" name="email" placeholder="ex: xxx@xxx.com"required><br>
  <br>
  <label for="dateOfBirth"> Date of birth:</label>
  <input type="datetime-local" id="dateOfBirth" name="birthdaytime"><br>

  <p>Choose your favourite Nintendo platform:</p>

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

<p></p>

<label for="consoleColor">What's the color of your console?</label>
<input type="color" id="consoleColor" name="consoleColor" value="#ff0000"> <br>

<p>Choose your favourite video game licences:</p>

  <input type="checkbox" id="mario" name="fav_licences" value="Super Mario & cie">
  <label for="mario">Super Mario & cie</label><br>
  <input type="checkbox" id="zelda" name="fav_licences" value="The Legend of Zelda">
  <label for="zelda">The Legend of Zelda</label><br>
  <input type="checkbox" id="dragonQuest" name="fav_licences" value="Dragon Quest">
  <label for="dragonQuest">Dragon Quest</label><br>
  <input type="checkbox" id="animalCrossing" name="fav_licences" value="Animal Crossing">
  <label for="animalCrossing">Animal Crossing</label><br>
  <input type="checkbox" id="pokemon" name="fav_licences" value="Pokemon">
  <label for="pokemon">Pokemon</label><br>

<p>How many games developped by Nintendo do you own?</p>

    <input type="number" id="quantity" name="quantity" min="0" placeholder="ex:12"><br>
  
  <br><input type="reset"><br>
  <br>
  <label for ="Submit">Click the button to submit form :</label>
  <br><input type="image" src="./assets/logo_switch_button.png" alt="Submit" width="48" height="48">
</form> 