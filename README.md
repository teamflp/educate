# COMMANDES GITHUB

## Créer un dépôt

    git init
    git add README.md
    git commit -m "first commit"
    git remote add origin
    git push -u origin master

## Mettre à jour un dépôt

    git add . // ajoute tous les fichiers
    git add * // ajoute tous les fichiers
    git commit -m "message"
    git push

## Récupérer un dépôt

    git clone lien_du_dépôt

## Récupérer les modifications d'un dépôt

    git pull

## Récupérer les modifications d'un dépôt et fusionner

    git pull --rebase

## Récupérer les modifications d'un dépôt et fusionner (sans conflits)

    git pull --rebase --autostash

## Récupérer les modifications d'un dépôt et fusionner (sans conflits et sans historique)

    git pull --rebase --autostash --no-commit

## Récupérer les modifications d'un dépôt et fusionner (sans conflits et sans historique et sans index)

    git pull --rebase --autostash --no-commit --no-ff

## Récupérer les modifications d'un dépôt et fusionner (sans conflits et sans historique et sans index et sans stash)

    git pull --rebase --autostash --no-commit --no-ff --no-stash

[X] git status = Pour voir l'état
[X] git remote add origin url du repository = url du repository
[X] git fetch url du repository = url du repository
[X] git reset --hard origin/url du repository
[X] git remote remove origin url du repository
[X] git remote add url du repository
[X] git fetch url du repository
[X] git push origin master
[X] git checkout branch
[X] git branch -D branch
[X] git checkout master
[X] git branch -D -r branch
[X] git checkout -b branch
[X] git branch -D -r branch
[X] git checkout -b branch
[X] git branch -D -r branch
[X] git checkout -b branch

# ----------------------------------------------------------------

# INSTALLATION D'ANGULAR

## ---------------------------------------------------------------

# 1) Installation de Node.js sur windows

[X] https://nodejs.org/en/download/

# 2) Installer globale d'Angular CLI

[X] npm install -g @angular/cli

# 3) Créer un nouveau projet

[X] ng new nom_du_projet

# 4) Lancer le serveur

[X] ng serve

# 5) Créer un nouveau composant

[X] ng generate component nom_du_composant

# 6) Créer un nouveau service

[X] ng generate service nom_du_service

# 7) Créer un nouveau pipe

[X] ng generate pipe nom_du_pipe

# 8) Créer un nouveau directive

[X] ng generate directive nom_de_la_directive

# 9) Créer un nouveau guard

[X] ng generate guard nom_du_guard

# 10) Créer un nouveau interface

[X] ng generate interface nom_de_l_interface

# 11) Créer un nouveau enum

[X] ng generate enum nom_de_l_enum

# 12) Créer un nouveau class

[X] ng generate class nom_de_la_class

# 13) Créer un nouveau module

[X] ng generate module nom_du_module

# 14) Créer un composant dans un module

[X] ng generate component nom_du_module/nom_du_composant

# 15) Créer un service dans un module

[X] ng generate service nom_du_module/nom_du_service

# 16) Créer un pipe dans un module

[X] ng generate pipe nom_du_module/nom_du_pipe

# 17) Créer une directive dans un module

[X] ng generate directive nom_du_module/nom_de_la_directive

# 18) Créer un guard dans un module

[X] ng generate guard nom_du_module/nom_du_guard

# 19) Créer une interface dans un module

[X] ng generate interface nom_du_module/nom_de_l_interface

# 20) Créer un enum dans un module

[X] ng generate enum nom_du_module/nom_de_l_enum

# 21) Créer une class dans un module

[X] ng generate class nom_du_module/nom_de_la_class

# 22) On install fontawesome dans le projet

[X] npm install @fortawesome/fontawesome-free --save
[X] npm install --save @fortawesome/free-solid-svg-icons

# 23) On install jquery dans le projet

[X] npm install jquery --save

# 24) On install bootstrap dans le projet

[X] npm install @ng-bootstrap/ng-bootstrap --save
[X] npm install bootstrap --save

# 25) On install scrollreveal.js dans le projet

[X] npm install scrollreveal --save

# 26) On install slick-carousel dans le projet

[X] npm install slick-carousel --save

# 27) On install jquery.waypoints dans le projet

[X] npm install jquery.waypoints --save

# 28) On install jquery.counterup dans le projet

[X] npm install jquery.counterup --save

# 29) On install jquery.easing dans le projet

[X] npm install jquery.easing --save

# 30) On install tailwindcss dans le projet

[X] npm install tailwindcss --save

# 31) On install bootstrap-bundle dans le projet

[X] npm install bootstrap-bundle --save

# 32) Comment créer un tableau dans shell

[X] declare -a array=(1 2 3 4 5 6 7 8 9 10)

# 32) Comment créer un tableau contenant des variables dans shell

test="test"
test2="test2"
test3="test3"

[X] declare -a array=($test $test2 $test3)

# -------------------------------------------------------------------------


# 1) Créer un nouveau repository

[X] Qu'est-ce que Git ? : https://git-scm.com/
Git est un logiciel de gestion de versions décentralisé. Il permet de gérer les versions d'un projet de manière efficace et de collaborer avec d'autres développeurs. Git est un logiciel libre et gratuit. Il est disponible pour Windows, Linux et Mac OS X.

Avant de commencer, il faut installer Git sur votre ordinateur. Pour cela, rendez-vous sur le site officiel de Git : https://git-scm.com/downloads

Si vous utilisez Windows, téléchargez le fichier .exe et lancez-le. Suivez les instructions pour installer Git sur votre ordinateur.

Après l'installation, ouvrez Git Bash. C'est un terminal qui permet de lancer des commandes Git.
ou un terminal de commande (cmd), ou un terminal de commande (powershell) ou le terminal de votre IDE (Visual Studio Code, PHPStorm, etc.)

Vous pouvez vérifier que Git est bien installé en tapant la commande suivante : git --version

[X] On va créer un fichier demo.txt dans le dossier demogit. Pour cela, on va utiliser la commande touch. Cette commande permet de créer un fichier vide. (unique pour Linux et Mac OS X)

# INITIALISATION D'UN REPOSITORY
[X] On initialise le repository ou proget Git dans le dossier demogit. Pour cela, on va utiliser la commande git init. Cette commande permet d'initialiser un repository Git dans le dossier courant.
cela va créer un dossier caché .git dans le dossier demogit. Ce dossier contient toutes les informations sur le repository Git. Il ne faut surtout pas le supprimer.
Il est possible de le cacher en utilisant la commande : git config core.hideDotFiles false.
Pour afficher les fichiers cachés, on utilise la commande : ls -a.

# CONFIGURATION DE L'UTILISATEUR
[X] Après l'initialisation du projet on devoir configurer le nom et l'email de l'utilisateur. Pour cela, on va utiliser la commande git config. Cette commande permet de configurer le nom et l'email de l'utilisateur.
Pour configurer le nom de l'utilisateur, on utilise la commande :
git config --global user.name "nom de l'utilisateur".
Pour configurer l'email de l'utilisateur, on utilise la commande :
git config --global user.email "email de l'utilisateur".

# AJOUTER UN FICHIER AU REPOSITORY
On va devoir commencer à travailler sur le projet. Pour cela on va écrire notre premier texte.
ex: "Hello World" dans le fichier demo.txt.

[X] On va ajouter ou figé le fichier demo.txt dans le repository Git. Pour cela, on va utiliser la commande git add. Cette commande permet d'ajouter un fichier dans le repository Git: git add nom_du_fichier.

# NOTIONS DE [GIT ADD]
[X] On va ajouter tous les fichiers du dossier courant dans le repository Git. Pour cela, on va utiliser la commande git add. Cette commande permet d'ajouter tous les fichiers du dossier courant dans le repository Git: git add .

# NOTIONS DE [GIT STATUS]
[X] Pour s'assurer que le fichier a bien été ajouté, on utilise la commande git status. Cette commande permet de voir les modifications apportées au fichier : git status.

# NOTIONS DE [GIT COMMIT]
[X] On va commiter le fichier demo.txt dans le repository Git. Pour cela, on va utiliser la commande git commit. Cette commande permet de commiter un fichier dans le repository Git: git commit -m "message de commit".
le commit sert à figer l'état du fichier à un instant donné.

[x] Si on ajoute du texte dans le fichier demo.txt et qu'on veut commiter le fichier, on va utiliser la commande git commit -a -m "message de commit". Cette commande permet de commiter tous les fichiers modifiés dans le repository Git: git commit -a -m "message de commit".

Mais si on veut commiter tous les fichiers, on va utiliser la commande git commit -am "message de commit". Cette commande permet de commiter tous les fichiers dans le repository Git: git commit -am "message de commit".
Il est très important de bien documenter les commits avec un message parlant. Cela permet de savoir ce qui a été fait dans le commit.

Mais bien avant de faire le commit on va devoir ajouter le fichier dans le repository Git. Pour cela, on va utiliser la commande git add. Cette commande permet d'ajouter un fichier dans le repository Git: git add nom_du_fichier.
Si vous avez plusieurs fichiers à ajouter, vous pouvez utiliser la commande git add . Cette commande permet d'ajouter tous les fichiers dans le repository Git: git add .

# NOTIONS DE [GIT LOG]
[x] Pour voir l'historique des commits, on utilise la commande git log. Cette commande permet de voir l'historique des commits effectués: git log.
git log --oneline : permet d'afficher l'historique des commits sur une seule ligne.
git log --graph : permet d'afficher l'historique des commits sous forme de graphique.
git log --oneline --graph : permet d'afficher l'historique des commits sur une seule ligne et sous forme de graphique.

git log va afficher: - un identifiant unique pour chaque commit (4b5510d48f56bcfe0670ef5cb8c6e62b0beeb723). Cet identifiant est appelé hash du commit (SHA-1). - l'auteur du commit (Paterne). - la date du commit (Wed Sep 16 11:30:00 2020 +0200). - le message du commit (ajout du fichier demo.txt).

Cet identifiant permet de revenir à un commit précédent en utilisant la commande git checkout.

git log va afficher tous les commits effectués. Mais si on veut afficher les commits d'un utilisateur, on va utiliser la commande git log --author="nom de l'utilisateur". Cette commande permet de voir l'historique des commits effectués par un utilisateur: git log --author="nom de l'utilisateur".

[x] Si on a oublié de commiter un fichier, on peut utiliser la commande git commit --amend. Cette commande permet de commiter un fichier dans le repository Git: git commit --amend -m "message de commit".

# NOTIONS DE [GIT DIFF]
[x] Si on apporte des modifications au fichier demo.txt, on peut utiliser la commande git diff. Cette commande permet de voir les modifications apportées au fichier : git diff.

# NOTIONS DE [GIT CHECKOUT]
[x] On ajoute un deuxième paragraphe.
Si on veut revenir à un commit précédent, on va utiliser la commande git checkout suivi de l'identifiant du commit. Cette commande permet de revenir à un commit précédent :
git checkout identifiant_du_commit.
Ex : git checkout 4b5510d48f56bcfe0670ef5cb8c6e62b0beeb723
Cette étape s'appelle head detaché. Cela veut dire que le HEAD est détaché du commit.
Le HEAD est un pointeur qui pointe vers le dernier commit. il est identifié par un code hexadécimal de type SHA-1. Ex: 
il permet de savoir sur quel commit on se trouve. Pour voir le HEAD, on utilise la commande : 
git log --oneline --graph --all

[x] On va ajouter un autre texte sans faire de commit.
Si on veut revenir au dernier commit, on va utiliser la commande git checkout master/development. Cette commande permet de revenir au dernier commit : 
git checkout master/development (master pour le projet et development pour le projet de groupe).
Cette étape s'appelle head attaché. Cela veut dire que le HEAD est attaché au commit.

Un message apparait tel: 
erreur : Vos modifications locales aux fichiers suivants seraient écrasées par l'extraction :
        demo.txt
Veuillez valider ou remiser vos modifications avant de basculer de branche.
Abandon

# NOTIONS DE [GIT checkout -f identifiant_du_commit]
Nous allons forcer le checkout en utilisant la commande git checkout -f. Cette commande permet de forcer le checkout afin de revenir au dernier commit : 
git checkout -f identifiant_du_commit.
On remarque que le HEAD est attaché au dernier commit. Aussi le 3 texte n'est plus présent.

# NOTIONS DE [GIT reset --hard identifiant_du_commit]
On annule les modifications en utilisant la commande git reset --hard. Cette commande permet d'annuler les modifications apportées au fichier : 
git reset --hard identifiant_du_commit.

# NOTIONS DE [GIT revert identifiant_du_commit]
On supprime le commit en utilisant la commande git revert. Cette commande permet de supprimer un commit : git revert identifiant_du_commit.

À quoi sert la commande git revert ? Elle permet de revenir à un commit précédent sans perdre les modifications apportées au fichier: git revert identifiant_du_commit.

# NOTIONS DE [GIT BRAANCHES]
[x] On va lister les branches en utilisant la commande git branch. Cette commande permet de lister les branches : git branch.

La branche master est la branche principale. Elle contient le code stable du projet. On ne doit pas travailler directement sur cette branche. On va créer une nouvelle branche pour travailler sur le projet. Pour créer une branche, on va utiliser la commande git branch suivi du nom de la branche. Cette commande permet de créer une branche : 
git branch nom_de_la_branche.

# NOTIONS DE [GIT BRANCH -D nom_de_la_branche]
La création d'une nouvelle branche permet d'isoler le travail ou commit sur le projet. On peut travailler sur plusieurs branches en même temps. On peut aussi supprimer une branche en utilisant la commande git branch -d suivi du nom de la branche. Cette commande permet de supprimer une branche : 
git branch -d nom_de_la_branche.

On va travailler sur la branche develop. Pour se déplacer sur une branche, on va utiliser la commande git checkout suivi du nom de la branche. Cette commande permet de se déplacer sur une branche : git checkout nom_de_la_branche.

# NOTIONS DE [GIT BRANCH --SHOW-CURRENT]
On rentre la commande git branch pour voir la liste des branches. On remarque que la branche develop est la branche active. On peut aussi voir la branche active en utilisant la commande git branch --show-current. Cette commande permet de voir la branche active : git branch --show-current.
La branch principale est mise en surbrillance avec un astérisque.

[x] On va choisir la branche sur laquelle on veut travailler. Pour se déplacer sur une branche, on va utiliser la commande git checkout suivi du nom de la branche. Cette commande permet de se déplacer sur une branche : 
git checkout nom_de_la_branche.

[x] On va suivre la branche develop en utilisant la commande git branch --set-upstream-to=origin/develop. Cette commande permet de suivre la branche develop : git branch --set-upstream-to=origin/develop.

# NOTIONS DE [GIT MERGE nom_de_la_branche]

[x] Git merge permet de fusionner deux branches.
Avant de faire un merge on va se positionner sur la branche principale qui est master.
On va utiliser la commande git merge suivi du nom de la branche qu'on veut fusionner : 
git merge nom_de_la_branche.

Une fois le merge effectué, on va supprimer la branche fusionnée en utilisant la commande git branch -d suivi du nom de la branche. Cette commande permet de supprimer la branche develop : git branch -d nom_de_la_branch.

# RESOLUTION DE CONFLIT

[x] On va créer une nouvelle branche nommée modifs : git branch modifs

Étant sur la branche master/development on va devoir modifier le fichier demo2.txt. On va ajouter un nouveau paragraphe. On va faire un commit sur la branche master/development. On va ensuite se déplacer sur la branche branch1. On va modifier le fichier demo2.txt. On va ajouter un nouveau paragraphe. On va faire un commit sur la branche master. On va ensuite se déplacer sur la branche modifs. On va faire un merge avec la branche master. On va avoir un conflit. On va résoudre le conflit en supprimant les lignes de code en conflit. On va faire un commit. On va supprimer la branche modifs.

# NOTIONS DE [GIT PUSH]
On va envoyer les modifications sur le serveur en utilisant la commande git push. Cette commande permet d'envoyer les modifications sur le serveur : git push.



