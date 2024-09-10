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
        }

        .spørsmål-container {
            margin-top: 50px;
            text-align: center;
        }
        
        #feilid {
            display: none;
            position: fixed;
            top: 50%;
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
            top: 50%;
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
    </style>
</head>
<body>
    
<h1>Velg riktig svar:</h1>
<?php
// $SporsmalNumer=1;
// echo "<h2>Spørsmål Nummer: $SporsmalNumer</h2>";

?>
<!-- Content element where the question will be loaded -->
<div id="content">
</div>

<div id="feilid"></div>
<div id="Riktigid"></div>


    <p>
    Spørsmål: <span id="Sporsmal">1</span>
   </p>


<script>

    result = document.getElementById("Sporsmal");
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
    }

    function visRiktig(tekst) {
        var svarDiv = document.getElementById('Riktigid');
        svarDiv.style.display = 'block';
        svarDiv.textContent = tekst;
        
    }

</script>

<p>
    <button onclick="Neste()">Neste</button>
</p>




<!-- <form method="post">
        <input type="submit" name="Neste-Knap"
                class="button" value="Neste Knap" />
    </form> -->

</body>
</html>
