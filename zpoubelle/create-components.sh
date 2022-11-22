#!/bin/sh

# Create a new component
# Usage: create-component.sh <component-name>
# Description: Create a new component

# Check if the component name is provided
# if [ -z "$1" ]; then
#   echo "Component name is required"
#   exit 1
# fi

# # Create the component directory
# mkdir -p src/components/$1
# cd src/components/$1

# # Create the component files
# touch $1.js
# touch $1.test.js
# touch $1.css
# touch $1.html

# # Add the component to the index
# echo "export { default as $1 } from './$1/$1';" >> src/components/index.js

# # Add the component to the test index
# echo "import './$1/$1.test';" >> src/components/index.test.js
# echo "export { default as $1 } from './$1/$1';" >> src/components/index.test.js
# echo "export { default as $1 } from './$1/$1';" >> src/components/index.
# echo "export { default as $1 } from './$1/$1';" >> src/components/index.
# echo "export { default as $1 } from './$1/$1';" >> src/components/index.

# # Add the component to the storybook
# echo "import $1 from './$1/$1';" >> src/components/index.stories.js
# echo "storiesOf('$1', module)" >> src/components/index.stories.js 
# echo "  .add('default', () => <$1 />);" >> src/components/index.stories.js

# sudo mkdir -p ./src/Views/$component

# Si le composant est créé, on crée les fichiers nécessaires
# read -p "Voulez-vous créer un nouveau composant ? : " component 

# On déclare la variable component
component=""

sudo ln -s ./create-component.sh /usr/local/bin/create-component # Création du lien symbolique
# Usage: create-component <component-name>

path="./src/Controllers/$(echo $component).Controller.php" # Chemin du fichier Controller

# On vérifie si le composant existe déjà
if [ -f "$path" ]; then
   echo "Le composant $component existe déjà"
else
   echo "Le composant $component n'existe pas. Voulez-vous le créer ?"
   read -p "O/N ? : " answer

     if [ "$answer" = "O" ]; then
          sudo touch ./src/Controllers/$(echo $component | sed 's/\(.\)/\u\1/')Controller.php
          sudo touch ./src/Controllers/$(echo $component | sed 's/\(.\)/\u\1/')Model.php
          sudo touch ./public/components/css/$(echo $component).css
          sudo touch ./src/Views/$component/$(echo $component).view.php # On crée le fichier view.php dans le dossier du composant
     elif [ "answer" = "N" ]; then
          echo "Le composant n'a pas été créé"
     else
          exit
     fi
fi