<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lærings-Nettsted</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 20px;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            margin-bottom: 50px;
        }

        .svar-container {
            margin-top: auto;
            margin-bottom: 50px;
            text-align: center;
        }

        .svar {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 25px;
            border-radius: 10px;
            margin: 20px;
            cursor: pointer;
            display: inline-block;
            width: 400px;
            cursor: pointer;
        }

        .spørsmål-container {
            margin-top: 50px;
            text-align: center;
        }
        
        
        #feilid {
            display: none;
            position: fixed;
            top: 37%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #DB2929;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
        #Riktigid {
            display: none;
            position: fixed;
            top: 37%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #43DB09;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
        .tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

    </style>
</head>
<body>
<div class="tab">
  <button class="tablinks" onclick="capitel(event, 'IP-Adresse')">IP-Adresse</button>
  <button class="tablinks" onclick="capitel(event, '5-lagene TCP/IP modelene')">5-lagene TCP/IP modelene</button>
  <button class="tablinks" onclick="capitel(event, 'NAT')">Nat</button>
  <button class="tablinks" onclick="capitel(event, 'Restart')">Restart</button>
</div>

<!-- Tab content -->
<div id="IP-Adresse" class="tabcontent">
</div>

<div id="5-lagene TCP/IP modelene" class="tabcontent">
</div>

<div id="NAT" class="tabcontent">
</div>
<div id="Restart" class="tabcontent">
</div>


<h1>Velg riktig svar:</h1>
<p>
    Svart Riktig: <span id="SvartRiktigGanger">0</span> gang
   </p>
   <p>
    Svart Feil: <span id="SvartFeilGanger">0</span> gang 
   </p>
<!-- Content element where the question will be loaded -->
<div id="content">
</div>

<div id="feilid"></div>
<div id="Riktigid"></div>


    <p>
    Spørsmål: <span id="Sporsmal">1</span>
   </p>

<script>
    
    function capitel(evt, capitel) {


// Sjekk om det er IP-Adresse-tabben og sett spørsmålet til 5
if (capitel === 'IP-Adresse') {
SporsmalNumer=1;
Sporsmal.innerText = SporsmalNumer;
console.log(SporsmalNumer);
loadQuestion(SporsmalNumer);
}
if (capitel === '5-lagene TCP/IP modelene') {
SporsmalNumer=6;
Sporsmal.innerText = SporsmalNumer;
console.log(SporsmalNumer);
loadQuestion(SporsmalNumer);
}
if (capitel === 'NAT') {
SporsmalNumer=11;
Sporsmal.innerText = SporsmalNumer;
console.log(SporsmalNumer);
loadQuestion(SporsmalNumer);
}
if (capitel === 'Restart') {
result = document.getElementById("Sporsmal");
SvartRiktig=0;
SvartRiktigGanger.innerText = SvartRiktig;
console.log(SvartRiktig=0);

SvartFeil=0;
SvartFeilGanger.innerText = SvartRiktig;
console.log(SvartFeil=0);
}
}


    
    result = document.getElementById("Sporsmal");
    SvartRiktig=0;
    SvartFeil=0;
    SporsmalNumer=1
    // SporsmalNumer=1;

    function Neste(){
        SporsmalNumer+=1;
        Sporsmal.innerText = SporsmalNumer;
        console.log(SporsmalNumer);
        loadQuestion(SporsmalNumer);
    }
    
    function loadQuestion(SporsmalNumer) {
        console.log(SporsmalNumer)
        fetch(`getQuestion.php?question=${SporsmalNumer}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('content').innerHTML = data.content;
            }) 
            .catch(error => console.error('Error fetching question:', error));
    }

    window.onload = () => loadQuestion(SporsmalNumer); // Laster det første spørsmålet på siden lastes

    function visFeil(tekst) {
        var svarDiv = document.getElementById('feilid');
        svarDiv.style.display = 'block';
        svarDiv.textContent = tekst;
        
        SvartFeil+=1;
        SvartFeilGanger.innerText = SvartRiktig;
        console.log(SvartFeil+1);

            // Skjul meldingen etter 3 sekunder
    setTimeout(function() {
        svarDiv.style.display = 'none';
    }, 3000);
    }

    function visRiktig(tekst) {
    var svarDiv = document.getElementById('Riktigid');
    svarDiv.style.display = 'block';
    svarDiv.textContent = tekst;

    SvartRiktig+=1;
    SvartRiktigGanger.innerText = SvartRiktig;
    console.log(SvartRiktig+1);

    // Skjul meldingen etter 3 sekunder
    setTimeout(function() {
        svarDiv.style.display = 'none';
    }, 3000);
}


</script>
<?php
  echo '<p>';
  echo '<button onclick="Neste()" style="position:absolute; text-align: right;">Neste</button>';
  echo '</p>';
?>



</body>
</html>
