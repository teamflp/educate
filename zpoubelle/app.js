// import * as components from './js/*.js';
// import './css/*.css';

/**
 * Class importAll
 * AUTEUR : Paterne G. G.
 * DATE : 13/11/2022
 * DESCRIPTION :
 * Cette classe permet d'importer tous les fichiers d'un dossier
 */

class importAll {
     constructor() {
          this.importAll = (c) => {
               c.keys().forEach(c);
          };
     }

     // requireAll(path, ext = []) {
     //      return this.importAll(require.context(path, true, ext));
     // }

     importAllFiles(path, type = []) {
          return this.importAll(
               require.context(path, true, new RegExp(`\.(${type.join("|")})$`))
          ); //
     }
}

export default importAll; // export de la classe importAll

// importe les fichiers css
function importAllJs() {
     let importJs = new importAll();
     return { importJs };
}

importAllJs().importJs.importAllFiles("./css", ["css"]); // Fonction globale d'importation des fichiers

let { importJs } = importJs.importAllFiles("./css", ["css"]); // importe les fichiers css
//importAllCss().importCss.requireAll('./css', /\.css$/); // importe tous les fichiers css

//let { importJs } = importAllFiles(); // Fonction globale d'importation des fichiers
// importe les fichiers js
// function AllFiles() {
//      let importJs = new importAll();
//      return { importJs };
// }

// AllFiles(); // on appelle la fonction AllFiles

// import { importJs } from './app.js';

// importJs.requireAll('./js', /\.js$/);

// importJs.requireAll('./css', /\.css$/);

// let importCss = new importAll();
// importCss.requireAll('./css', /\.css$/);
// importImg.requireAll('./img', /\.(png|jpe?g|gif)$/);
// importSvg.requireAll('./svg', /\.svg$/);
// importPhp.requireAll('./php', /\.php$/);
