#petit jeu a deux 


[int]$chiffre1 = read-host : 'donne moi un chiffre compris entre 1 et 10'
Clear-Host
if($chiffre1 -le 10)
{
[int]$chiffre2 = read-host : ' Au joueurs 2 devine le chiffre du joueur 1 :'
}
else
{
echo "attention le chiffre n'est pas inférieur ou égale a 10 !!"
}

if($chiffre1 -eq $chiffre2)
{
write-host 'le joueur 2 à trouvé le bon chiffre, JOUEUR 2 à gagné'
}
else
{
write-host "le joueur 2 n'a pas trouvé le bon chiffre, JOUEUR 1 à gagné"
if($chiffre1 -lt $chiffre2)
{
write-host 'le chiffre du joueur 1 est plus petit que celui du joueur 2'
}
else
{

write-host 'le chiffre du joueur 1 est plus grand que celui du joueur 2'
}
}