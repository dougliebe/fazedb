
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>


<form action="upload.php" method="post" />
<input type="hidden" name="formid" value="form"/>
<input type="hidden" name="redirect_to" value=""/>
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="index.js"></script>
 -->
<S<

<header>
    <h1>FaZeDB<img src="faze.png" style="width:2%;"></h1>

  </header>

<p>Match Date: <input type="date" name="input1"/></p>
<p><span>
        <p for="team">Opponent:
        <select id="team" name="team">
          <option selected>Select Team</option>
          <option>OpTic</option>
          <option>Luminosity</option>
          <option>Red Reserve</option>
          <option>Reciprocity</option>
          <option>100 Thieves</option>
          <option>eUnited</option>
          <option>Splyce</option>
          <option>Envy</option>
          <option>Splyce-Halo</option>
        </select>
      </span></p> </p>
<p>Win/Loss? 
  
    <input type="radio" id="win"
     name="wl" value="win">
    <label for="win">Win</label>

    <input type="radio" id="loss"
     name="wl" value="loss">
    <label for="loss">Loss</label>

    <input type="radio" id="scout"
     name="wl" value="scout">
    <label for="scout">Scouting</label>

</p>
<!-- <button id="reset">reset</button> -->
<p><span>
        <p id='button' for="map">Map:
        <select id="map" name="map">
          <option selected>Select Map</option>
          <option>Slums</option>
          <option>Frequency</option>
          <option>Other</option>
        </select>
      </span></p></p>
<p>Mode: 
  
    <input type="radio" id="HP"
     name="mode" value="HP">
    <label for="HP">Hardpoint</label>

    <input type="radio" id="SND"
     name="mode" value="SND">
    <label for="SND">Search & Destroy</label>

    <input type="radio" id="Control"
     name="mode" value="Control">
    <label for="Control">Control</label>
</p>

<p>Game Info: 
    <input type="radio" id="scrim"
     name="info" value="scrim">
    <label for="scrim">Team Scrim</label>

    <input type="radio" id="lan"
     name="info" value="lan">
    <label for="lan">LAN</label>

    <input type="radio" id="online"
     name="info" value="online">
    <label for="online">Online Tournament</label>
</p>

<p><strong>If Search & Destroy: </strong></p>
<div style="margin-left: 1em;">
<p>Opponent Playing: 
    <input type="radio" id="snd_off"
     name="snd_offdef" value="off">
    <label for="snd_off">Offense</label>

    <input type="radio" id="snd_def"
     name="snd_offdef" value="def">
    <label for="snd_def">Defense</label>
</p>
<p><u>Offense</u> Attempted to go: 
    <input type="radio" id="snd_A"
     name="snd_attacksite" value="A">
    <label for="snd_A">A</label>

    <input type="radio" id="snd_B"
     name="snd_attacksite" value="B">
    <label for="snd_B">B</label>
</p>
<p>Opponent Won/Lost?
    <input type="radio" id="snd_won"
     name="snd_success" value="won">
    <label for="snd_won">Won</label>

    <input type="radio" id="snd_lost"
     name="snd_success" value="lost">
    <label for="snd_lost">Lost</label>
</p>
</div>

<p><strong>If Control: </strong></p>
<div style="margin-left: 1em;">
<p>Opponent Playing: 
    <input type="radio" id="ctl_off"
     name="ctl_offdef" value="off">
    <label for="ctl_off">Offense</label>

    <input type="radio" id="ctl_def"
     name="ctl_offdef" value="def">
    <label for="ctl_def">Defense</label>
</p>
<p>Opponent Lives Left: 
    <label for="display-name">
            </label>
            <input type="text" id="ctl_lives" name="ctl_lives"
                   pattern="[0-9]+"
                   maxlength="3" minlength="0" value = 0 size="5" />
</p>
<p>Opponent Won/Lost?
    <input type="radio" id="ctl_won"
     name="ctl_success" value="won">
    <label for="ctl_won">Won</label>

    <input type="radio" id="ctl_lost"
     name="ctl_success" value="lost">
    <label for="ctl_lost">Lost</label>
</p>
</div>


<p><strong>Game Notes: </strong></p>
<p><textarea rows="10" cols="50" name="textarea"></textarea></p>

<input type="submit" name="Submit">
</form>
