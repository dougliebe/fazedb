<link rel="stylesheet" type="text/css" href="style.css">





<header>
    <h1>FaZeDB<img src="faze.png" style="width:2%;"></h1>

  </header>


<form action="fetch.php" method="post" />
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
      </span></p>
  </p>

<p><strong>Choose Which Data to Pull</strong></p>
<p>From: <input type="date" name="fromDate"/> To: Today</p>

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

<input type="submit" name="Submit">
</form>

