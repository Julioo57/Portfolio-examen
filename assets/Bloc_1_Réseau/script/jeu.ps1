# Jeu de questions
play

# Définir les questions
$questions = @(
    @{question="Quel pays a remporté la Coupe du Monde de la FIFA 2018 ?"; reponse="France"},
    @{question="Qui est considéré comme le meilleur buteur de tous les temps ?"; reponse="Pelé"},
    @{question="Quel club a remporté le plus de Ligues des Champions ?"; reponse="Real Madrid"},
    @{question="Qui a gagné le Ballon d'Or en 2021 ?"; reponse="Lionel Messi"},
    @{question="Quelle équipe nationale est surnommée La Selecao ?"; reponse="Brésil"},
    @{question="Qui a remporté l'Euro 2016 ?"; reponse="Portugal"},
    @{question="Quel joueur a le plus de Ballons d'Or ?"; reponse="Lionel Messi"},
    @{question="Quel est le surnom de l'équipe nationale d'Argentine ?"; reponse="Albiceleste"},
    @{question="Quel club est connu sous le nom de Les Gunners ?"; reponse="Arsenal"},
    @{question="Quel est le plus grand club français ?"; reponse="PSG"}
)

# Fonction pour récupérer des questions au hasard
function Get-RandomQuestions {
    param (
        [int]$NumberOfQuestions
    )

    $randomQuestions = $questions | Get-Random -Count $NumberOfQuestions
    return $randomQuestions
}

#fonctionqui gérent le niveau de difficulté. 
function niveau {
    Write-Host "Commençons le jeu !!!"
    [string]$lvl1 = "3"
    [string]$lvl2 = "5"
    [string]$lvl3 = "10"

    [string]$level = Read-Host "Quel niveau souhaitez-vous ? (3, 5, 10) "

    if (($level -eq $lvl1) -or ($level -eq $lvl2) -or ($level -eq $lvl3)) {
        $nombreQuestion = [int]$level
        $randomQuestions = Get-RandomQuestions -NumberOfQuestions $nombreQuestion
        JouerQuiz -questions $randomQuestions -nombreQuestion $nombreQuestion
    } else {
        Write-Host "Veuillez écrire: 3, 5 ou 10 !"
        niveau
    }
}

#fonction qui gérent le  score
function JouerQuiz {
    param (
        [array]$questions,
        [int]$nombreQuestion
    )
    $score = 0

    foreach ($questionObj in $questions) {
        $question = $questionObj.question
        $reponse = $questionObj.reponse
        if (PoserQuestion -question $question -reponseCorrecte $reponse) {
            $score++
        }
    }

    Write-Host "Votre score est $score sur $nombreQuestion."
    Restart
}

#fonction qui poses les questions | tentative 
function PoserQuestion {
    param (
        [string]$question,
        [string]$reponseCorrecte
    )
    $tentative = 3
    $bonneReponse = $false

    while ($tentative -gt 0 -and -not $bonneReponse) {
        $reponse = Read-Host "$question (Votre réponse: )"
        if ($reponse -eq $reponseCorrecte) {
            Write-Host "Correct !" -ForegroundColor Green
            $bonneReponse = $true
        } else {
            $tentative--
            if ($tentative -gt 0) {
                Write-Host "Incorrect. Il vous reste $tentative tentative." -ForegroundColor Red
            } else {
                Write-Host "Incorrect. La bonne réponse était '$reponseCorrecte'." -ForegroundColor Red
            }
        }
    }

    return $bonneReponse
}

 # Redémarrer le jeu
function Restart {
    [string]$yes = "Y"
    [string]$no = "N"

    [string]$restart = Read-Host "Voulez-vous rejouer ? (Y/N)"-ForegroundColor yellow

    if (($restart -eq $yes) -or ($restart -eq $no)) {
        if ($restart -eq $yes) {
            play
        } else {
            stop
        }
    } else {
        Write-Host "Veuillez écrire Y ou N"
        Restart
    }
}

# Relancer le jeu
function play {
    niveau
}

# Fonction stop
function stop {
    exit
}

# Lancer le jeu par défaut
play
