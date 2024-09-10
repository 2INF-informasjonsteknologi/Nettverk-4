<?php

$SporsmalNumer = isset($_GET['question']) ? intval($_GET['question']) : 1;

header('Content-Type: application/json');

$Sporsmal = [
    1 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'>Hva er en IP-adresse?</div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>En unik adresse som identifiserer enheter som er koblet til internett</div>
                <div class='svar' onclick='visFeil(\"Feil\")'>En adresse som identifiserer enheter som er koblet til Bluetooth</div>
                <div class='svar' onclick='visFeil(\"Feil\")'>En adresse som identifiserer enheter som er koblet til Wi-Fi</div>
            </div>"
    ],
    2 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'>Hva er forskjellen mellom IPv4 og IPv6? <br></div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visFeil(\"Feil\")'>En unik adresse som identifiserer enheter som er koblet til internett</div>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>IPv4-adresser har fire tall som er adskilt med punktum, mens IPv6-adresser har åtte tall og bruker kolon for å skille tallene. </div>
                <div class='svar' onclick='visFeil(\"Feil\")'>Det er ingen forskjell mellom IPv4 og IPv6.</div>
            </div>"       
    ],
    3 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'>Hva er en dynamisk IP-adresse? <br></div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visFeil(\"Feil\")'>En IP-adresse som er fast og alltid er den samme</div>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>En IP-adresse som endrer seg hver gang du kobler til internett </div>
                <div class='svar' onclick='visFeil(\"Feil\")'>En IP-adresse som er tildelt av din internettleverandør</div>
            </div>"       
    ],
    4 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'>Hvorfor er IPv6 viktig? <br></div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visFeil(\"Feil\")'>IPv6 gir oss en mindre adresseplass enn IPv4</div>
                <div class='svar' onclick='visFeil(\"Feil\")'>IPv6 har ingen betydning for internett</div>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>IPv6 gir oss en mye større adresseplass enn IPv4</div>
            </div>"       
    ],
    5 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'>Hva er en offentlig IP-adresse? <br></div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>En IP-adresse som er tilordnet av en internettjenesteleverandør (ISP) og kan nås fra internett </div>
                <div class='svar' onclick='visFeil(\"Feil\")'>En IP-adresse som er tilordnet av en lokal ruter og kan nås fra internett</div>
                <div class='svar' onclick='visFeil(\"Feil\")'>En IP-adresse som er tilordnet av en lokal enhet og kan ikke nås fra internett</div>
            </div>"       
    ],
    6 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'>Hva er den øverste laget i 5-lags TCP/IP-modellen? <br></div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visFeil(\"Feil\")'>Internettlaget</div>
                <div class='svar' onclick='visFeil(\"Feil\")'>Transportlaget</div>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>Applikasjonslaget</div>
            </div>"       
    ],
    7 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'>Hva er formålet med transportlaget i 5-lags TCP/IP-modellen? <br></div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visFeil(\"Feil\")'>Å sørge for at dataene blir delt opp i mindre pakker som kan sendes over nettverket</div>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>Å sørge for at dataene blir delt opp i mindre pakker som kan sendes over nettverket </div>
                <div class='svar' onclick='visFeil(\"Feil\")'>Å sørge for at dataene når frem til riktig mottaker</div>
            </div>"       
    ],
    8 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'>Hva er formålet med internettlaget i 5-lags TCP/IP-modellen? <br></div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>Å sørge for at dataene når frem til riktig mottaker? </div>
                <div class='svar' onclick='visFeil(\"Feil\")'>Å sørge for at dataene blir delt opp i mindre pakker som kan sendes over nettverket</div>
                <div class='svar' onclick='visFeil(\"Feil\")'>Å sørge for at dataene blir kryptert før de sendes over nettverket</div>
            </div>"       
    ],
    9 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'>Hva er formålet med nettverkslaget i 5-lags TCP/IP-modellen? <br></div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visFeil(\"Feil\")'>Å sørge for at dataene blir delt opp i mindre pakker som kan sendes over nettverket</div>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>Å sørge for at dataene når frem til riktig mottaker </div>
                <div class='svar' onclick='visFeil(\"Feil\")'>Å sørge for at dataene blir konvertert til elektriske signaler som kan sendes over nettverket</div>
            </div>"       
    ],
    10 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'>Hva er formålet med fysisk laget i 5-lags TCP/IP-modellen? <br></div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visFeil(\"Feil\")'>Å sørge for at dataene når frem til riktig mottaker</div>
                <div class='svar' onclick='visFeil(\"Feil\")'>Å sørge for at dataene blir delt opp i mindre pakker som kan sendes over nettverket</div>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>Å sørge for at dataene blir konvertert til elektriske signaler som kan sendes over nettverket </div>
                 </div>"       
    ],
    11 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'> <br>Hva er NAT?</div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visFeil(\"Feil\")'>Network Access Technology</div>
                <div class='svar' onclick='visFeil(\"Feil\")'>Network Authentication Token</div>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>Network Address Translation </div>
                 </div>"       
    ],
    12 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'> <br>Hva er formålet med NAT?</div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visFeil(\"Feil\")'>Å beskytte nettverket mot skadelig programvare</div>
                <div class='svar' onclick='visFeil(\"Feil\")'>Å øke hastigheten på dataoverføringen</div>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>Å gi flere enheter tilgang til internett med en enkelt IP-adresse </div>
                 </div>"       
    ],
    13 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'> <br>Hvilke typer NAT finnes det?</div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visFeil(\"Feil\")'>Intern NAT og ekstern NAT</div>
                <div class='svar' onclick='visFeil(\"Feil\")'>Offentlig NAT og privat NAT</div>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>Statiske NAT og dynamiske NAT </div>
                 </div>"       
    ],
    14 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'> <br>Hva er forskjellen mellom statisk og dynamisk NAT?</div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visFeil(\"Feil\")'>Dynamisk NAT bruker en fast IP-adresse, mens statisk NAT bruker en midlertidig IP-adresse</div>
                <div class='svar' onclick='visFeil(\"Feil\")'>Statisk NAT er mer sikker enn dynamisk NAT</div>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>tatisk NAT gir en fast IP-adresse til hver enhet, mens dynamisk NAT gir midlertidige IP-adresser til enhetene som kobler seg til nettverket </div>
                 </div>"       
    ],
    15 => [
        "content" => "
            <div class='spørsmål-container'>
                <div class='svar'> <br>Hva er ulempene med NAT?</div>
            </div>
            <div class='svar-container'>
                <div class='svar' onclick='visFeil(\"Feil\")'>Det kan føre til langsommere hastighet på dataoverføringen</div>
                <div class='svar' onclick='visFeil(\"Feil\")'>Det kan føre til problemer med å koble til visse applikasjoner eller tjenester</div>
                <div class='svar' onclick='visRiktig(\"Riktig\")'>Alle alternativene over </div>
                 </div>"       
    ],
    // Flere spørsmål kan legges til her
];

echo json_encode($Sporsmal[$SporsmalNumer] ?? ["content" => "Spørsmålet eksisterer ikke."]);
