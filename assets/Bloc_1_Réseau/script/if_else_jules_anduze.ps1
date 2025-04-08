$Folder = "C:\MEWO"
$File = "C:\MEWO\test.txt"
$x = @"
Name : julioo
Version : 120
Description : Fichier de test
"@

if (Test-Path $Folder) {
    Write-Host "Le dossier existe déjà."
} else {
    Write-Host "Le dossier n'existe pas. Création du dossier."
    New-Item -ItemType Directory -Path $Folder
}
 
Set-Location $Folder
 
if (Test-Path $File) {
    Write-Host "Le fichier existe déjà."
} else {
    Write-Host "Le fichier n'existe pas. Création du fichier."
    New-Item -ItemType File -Path $File -Value $x
}
 
$Contenu = Get-Content -Path $File
 
$Ligne = $Contenu | Select-String -Pattern "^Name :"
if ($Ligne) {
    $Nom = $Ligne -replace "^Name : ", ""
} else {
    Write-Host "Aucun nom trouvé dans le fichier."
    exit
}
 
$NomEntree = Read-Host "Veuillez entrer un mot"
 
if ($NomEntree -eq $Nom) {
    Write-Host "Noms identiques."
} else {
    Write-Host "Noms différents."
}
     