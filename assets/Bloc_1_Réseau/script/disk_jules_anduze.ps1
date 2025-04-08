$disk = Get-WmiObject Win32_LogicalDisk

foreach ($disk in $disk) {

[int]$Total = [math]::Round($disk.Size / 1GB, 2)
[int]$Disponible = [math]::Round($disk.FreeSpace / 1GB, 2)

 Write-Host "Votre espace total sur le disque est de $Total Go"
 Write-Host "L'espace dispo sur le disque est de $Disponible Go"
}