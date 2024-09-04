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

        /* Container for svarene (svaralternativene) */
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

        /* Styling for footer */
        footer {
            margin-top: 50px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Styling for svaret sentrert på skjermen */
        #feilid {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            /* background-color: #f9f9f9; */
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
            /* background-color: #f9f9f9; */
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
$SpørsmålNumer = 12;

echo "<h2>Spørsmål Nummer: $SpørsmålNumer</h2>";

// Korrigerer sammenligningen til '==' for å sjekke verdien
if ($SpørsmålNumer == 1) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">Hva er en IP-adresse?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visRiktig(\'Riktig \')">En unik adresse som identifiserer enheter som er koblet til internett</div>
        <div class="svar" onclick="visFeil(\'Feil\')">En adresse som identifiserer enheter som er koblet til Bluetooth</div>
        <div class="svar" onclick="visFeil(\'Feil\')">En adresse som identifiserer enheter som er koblet til Wi-Fi</div>
    </div>';
}
if ($SpørsmålNumer == 2) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">Hva er en IP-adresse?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visFeil(\'Feil \')">En unik adresse som identifiserer enheter som er koblet til internett</div>
        <div class="svar" onclick="visRiktig(\'Riktig\')">IPv4-adresser har fire tall som er adskilt med punktum, mens IPv6-adresser har åtte tall og </div>
        <div class="svar" onclick="visFeil(\'Feil\')">Det er ingen forskjell mellom IPv4 og IPv6.</div>
    </div>';
}
if ($SpørsmålNumer == 3) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">Hva er en dynamisk IP-adresse?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visRiktig(\'Riktig \')">En IP-adresse som endrer seg hver gang du kobler til internett </div>
        <div class="svar" onclick="visFeil(\'Feil\')">En IP-adresse som er fast og alltid er den samme</div>
        <div class="svar" onclick="visFeil(\'Feil\')">En IP-adresse som er tildelt av din internettleverandør</div>
    </div>';
}
if ($SpørsmålNumer == 4) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">Hvorfor er IPv6 viktig?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visFeil(\'Feil\')">IPv6 har ingen betydning for internett</div>
        <div class="svar" onclick="visFeil(\'Feil\')">IPv6 gir oss en mindre adresseplass enn IPv4</div>
        <div class="svar" onclick="visRiktig(\'Riktig \')">IPv6 gir oss en mye større adresseplass enn IPv4</div>
    </div>';
}
if ($SpørsmålNumer == 5) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">|Hva er en offentlig IP-adresse?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visFeil(\'Feil\')">En IP-adresse som er tilordnet av en lokal ruter og kan nås fra internett</div>
        <div class="svar" onclick="visRiktig(\'Riktig\')">En IP-adresse som er tilordnet av en internettjenesteleverandør (ISP) og kan nås fra internett</div>
        <div class="svar" onclick="visFeil(\'Feil \')">En IP-adresse som er tilordnet av en lokal enhet og kan ikke nås fra internett</div>
    </div>';
}
if ($SpørsmålNumer == 6) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">6.	Hva er den øverste laget i 5-lags TCP/IP-modellen?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visFeil(\'Feil\')">Internettlaget</div>
        <div class="svar" onclick="visFeil(\'Feil\')">Transportlaget</div>
        <div class="svar" onclick="visRiktig(\'Riktig \')">Applikasjonslaget</div>
    </div>';
}
if ($SpørsmålNumer == 7) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">Hva er formålet med transportlaget i 5-lags TCP/IP-modellen?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visFeil(\'Feil\')">) Å sørge for at dataene blir delt opp i mindre pakker som kan sendes over nettverket</div>
        <div class="svar" onclick="visFeil(\'Feil\')">Å sørge for at dataene når frem til riktig mottaker</div>
        <div class="svar" onclick="visRiktig(\'Riktig \')">Å sørge for at dataene blir delt opp i mindre pakker som kan sendes over nettverket</div>
    </div>';
}
if ($SpørsmålNumer == 8) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">Hva er formålet med internettlaget i 5-lags TCP/IP-modellen?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visRiktig(\'Riktig\')">Å sørge for at dataene når frem til riktig mottaker?</div>
        <div class="svar" onclick="visFeil(\'Feil\')">Å sørge for at dataene blir delt opp i mindre pakker som kan sendes over nettverket</div>
        <div class="svar" onclick="visFeil(\'Feil \')">Å sørge for at dataene blir kryptert før de sendes over nettverket</div>
    </div>';
}
if ($SpørsmålNumer == 9) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">Hva er formålet med nettverkslaget i 5-lags TCP/IP-modellen?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visFeil(\'Feil\')">Å sørge for at dataene blir delt opp i mindre pakker som kan sendes over nettverket</div>
        <div class="svar" onclick="visRiktig(\'Riktig\')">Å sørge for at dataene når frem til riktig mottaker</div>
        <div class="svar" onclick="visFeil(\'Feil \')">Å sørge for at dataene blir konvertert til elektriske signaler som kan sendes over nettverket</div>
    </div>';
}
if ($SpørsmålNumer == 10) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">Hva er formålet med fysisk laget i 5-lags TCP/IP-modellen?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visFeil(\'Feil\')">Å sørge for at dataene når frem til riktig mottaker</div>
        <div class="svar" onclick="visFeil(\'Feil\')">Å sørge for at dataene blir delt opp i mindre pakker som kan sendes over nettverket</div>
        <div class="svar" onclick="visRiktig(\'Riktig \')">Å sørge for at dataene blir konvertert til elektriske signaler som kan sendes over nettverket</div>
    </div>';
}
if ($SpørsmålNumer == 11) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">Hva er NAT?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visFeil(\'Feil\')">Network Access Technology</div>
        <div class="svar" onclick="visRiktig(\'Riktig\')">Network Address Translation</div>
        <div class="svar" onclick="visFeil(\'Feil \')">) Network Authentication Token</div>
        <div class="svar" onclick="visFeil(\'Feil\')">Network Address Translation</div>
    </div>';
}
if ($SpørsmålNumer == 12) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">Hva er formålet med NAT?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visFeil(\'Feil\')">Å beskytte nettverket mot skadelig programvare</div>
        <div class="svar" onclick="visRiktig(\'Riktig \')">Å gi flere enheter tilgang til internett med en enkelt IP-adresse</div>
        <div class="svar" onclick="visFeil(\'Feil\')">Å øke hastigheten på dataoverføringen</div>
        <div class="svar" onclick="visFeil(\'Feil\')">Å hindre uautorisert tilgang til nettverket</div>
    </div>';
}
if ($SpørsmålNumer == 13) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">Hvilke typer NAT finnes det?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visRiktig(\'Riktig \')">Statiske NAT og dynamiske NAT</div>
        <div class="svar" onclick="visFeil(\'Feil\')">Offentlig NAT og privat NAT</div>
        <div class="svar" onclick="visFeil(\'Feil\')">Intern NAT og ekstern NAT</div>
    </div>';
}
if ($SpørsmålNumer == 14) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">Hva er forskjellen mellom statisk og dynamisk NAT?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visFeil(\'Feil\')">Dynamisk NAT bruker en fast IP-adresse, mens statisk NAT bruker en midlertidig IP-adresse</div>
        <div class="svar" onclick="visRiktig(\'Riktig \')">Statisk NAT gir en fast IP-adresse til hver enhet, mens dynamisk NAT gir midlertidige IP-adresser til enhetene som kobler seg til nettverket</div>
        <div class="svar" onclick="visFeil(\'Feil\')">Statisk NAT er mer sikker enn dynamisk NAT</div>
    </div>';
}
if ($SpørsmålNumer == 15) {
    echo '
    <div class="spørsmål-container">
        <div class="svar">Hva er ulempene med NAT?</div>
    </div>
    
    <div class="svar-container">
        <div class="svar" onclick="visFeil(\'Feil\')">Det kan føre til langsommere hastighet på dataoverføringen</div>
        <div class="svar" onclick="visFeil(\'Feil\')">Det kan føre til problemer med å koble til visse applikasjoner eller tjenester</div>
        <div class="svar" onclick="visFeil(\'Feil\')">Det kan føre til sikkerhetsproblemer hvis det ikke er konfigurert riktig</div>
        <div class="svar" onclick="visRiktig(\'Riktig \')">Alle alternativene over</div>
    </div>';
}

?>

    <!-- Område for å vise svaret -->
    <div id="feilid"></div>
    <div id="Riktigid"></div>

    <script>
        // Funksjon for å vise svaret når brukeren klikker på et svaralternativ
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
    

</body>
</html>
