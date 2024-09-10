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
                <div class='svar' onclick='visRiktig(\"Riktig\")'>IPv4-adresser har fire tall som er adskilt med punktum, mens IPv6-adresser har åtte tall og </div>
                <div class='svar' onclick='visFeil(\"Feil\")'>Det er ingen forskjell mellom IPv4 og IPv6.</div>
            </div>"
    ],
    // Flere spørsmål kan legges til her
];

echo json_encode($Sporsmal[$SporsmalNumer] ?? ["content" => "Spørsmålet eksisterer ikke."]);
