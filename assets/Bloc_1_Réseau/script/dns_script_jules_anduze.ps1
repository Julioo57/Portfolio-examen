# question 1
function Get-DNSAddresses {
    Write-Host "Récupération des adresses des serveurs DNS en cours"
    $dnsServers = Get-DnsClientServerAddress
    foreach ($dns in $dnsServers) {
        Write-Host "Interface: $($dns.InterfaceAlias) - Serveurs DNS: $($dns.ServerAddresses)"
    }
}

# question 1.1
function Test-DNSServers {
    Write-Host "Test des serveurs DNS en cours"
    $dnsServers = (Get-DnsClientServerAddress).ServerAddresses
    foreach ($server in $dnsServers) {
        $pingResult = Test-Connection -ComputerName $server -Count 1 -Quiet
        if ($pingResult) {
            Write-Host "Serveur DNS $server est démarré."
        } else {
            Write-Host "Serveur DNS $server n'est PAS démarré."
        }
    }
}

# question2
function Change-DNSServers {
    param(
        [string[]]$NewDNSServers = @("8.8.8.8", "8.8.4.4")
    )
    Write-Host "Changement des serveurs DNS vers: $NewDNSServers"
    $interfaceIndex = (Get-DnsClientServerAddress | Where-Object {$_.AddressFamily -eq "IPv4"}).InterfaceIndex
    Set-DnsClientServerAddress -InterfaceIndex $interfaceIndex -ServerAddresses $NewDNSServers
    Write-Host "Serveurs DNS modifiés avec succès."
}

# question3
function Create-DNSRecord {
    param(
        [string]$RecordType = "A",  # Type A
        [string]$RecordName = "NewRecord",
        [string]$ZoneName = "learn.local",
        [string]$IPAddress = "192.168.1.100"
    )
    Write-Host "Création d'un enregistrement DNS de type $RecordType..."
    switch ($RecordType) {
        "A" {
            Add-DnsServerResourceRecordA -Name $RecordName -ZoneName $ZoneName -IPv4Address $IPAddress
        }
        "CNAME" {
            Add-DnsServerResourceRecordCName -Name $RecordName -ZoneName $ZoneName -HostNameAlias $IPAddress
        }
        default {
            Write-Host "Enregistrement non pris en charge."
        }
    }
    Write-Host "Enregistrement DNS créé avec succès."
}

# question4
function Test-DNSRecord {
    param(
        [string]$RecordName = "learn.local"
    )
    Write-Host "Résolution du nom $RecordName..."
    $result = Resolve-DnsName -Name $RecordName
    Write-Host "Résultat de la résolution :"
    $result | Format-Table -AutoSize
}

# question 5
function Remove-DNSRecord {
    param(
        [string]$RecordName = "NewRecord",
        [string]$ZoneName = "learn.local",
        [string]$RecordType = "A"  # type A
    )
    Write-Host "Suppression de l'enregistrement DNS $RecordName..."
    Remove-DnsServerResourceRecord -Name $RecordName -ZoneName $ZoneName -RRType $RecordType -Force
    Write-Host "Enregistrement supprimé avec succès."
}

# question6
function Show-DNSErrorLogs {
    Write-Host "Affichage des dernières erreurs DNS..."
    Get-EventLog -LogName System -InstanceId 1014 -EntryType Error -Newest 10 | Format-Table -AutoSize
}

# parti pour Executer mon Script 




Get-DNSAddresses


Test-DNSServers


Change-DNSServers -NewDNSServers @("1.1.1.1", "9.9.9.9")


Create-DNSRecord -RecordName "TestRecord" -ZoneName "learn.local" -IPAddress "192.168.1.105" -RecordType "A"


Test-DNSRecord -RecordName "TestRecord.learn.local"

Remove-DNSRecord -RecordName "TestRecord" -ZoneName "learn.local" -RecordType "A"

Show-DNSErrorLogs
