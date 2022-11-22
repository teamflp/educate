/**
 * AUTEUR : Paterne G. G.
 * DATE : 13/11/2022
 * DESCRIPTION : Cette classe importAll permet d'importer tous les fichiers d'un dossier
 */
// Configuration de requirejs
requirejs.config({
     "baseUrl": "public/components/js",  // Chemin des fichiers js a importer,
     "paths": {
          "jquery": "../js/jquery.min",
          "waypoints": "../js/jquery.waypoints.min",
          "counterup": "../js/jquery.counterup.min",
          "owlcarousel": "../js/owl.carousel.min",
          "scrollreveal": "../js/scrollreveal",
          "fontawesome": "../js/f88b724a6b",
          "scripts": "../js/scripts"
     },
      // importAllFiles('./js', ['js']);
     function(type = []) {
          return require.context('./', true, new RegExp(`\.(${type.join('|')})$`));
     }   
}); 


const importAllFiles = (path, type = []) => { 
     return require.context(path, true, new RegExp(`\.(${type.join('|')})$`));
     function resolve(path) {
          return require.resolve(path);
     }

     function importAll(r) {
          r.keys().forEach(r);
     }
     
}

importAllFiles('./js', ['js']);

// class importAll {
//      constructor() {
//           this.importAll = (c) => {
//                c.keys().forEach(c);
//           };
//      }

//      // requireAll(path, ext = []) {
//      //      return this.importAll(require.context(path, true, ext));
//      // }

//      importAllFiles(path, type = []) {
//           return this.importAll(require.context(path, true, new RegExp(`\.(${type.join("|")})$`))); //
//      }
// }

// export class importAll {
//      constructor() {
//           this.importAll = (c) => {
//                c.keys().forEach(c);
//           };
//      } 
          
//      /**
//       * Importe les fichiers d'un dossier
//       * @param {string} path Chemin du dossier
//       * @param {array} type Type de fichier à importer
//       * @returns {object} Retourne l'objet importAll
//       * @example importAll.importAllFiles('./js', ['js']); 
//      */
     
//      importAllFiles(path, type = []) {
//           if (type.length > 0) {
//                this.importAllFiles(path, type);
//                return this.importAll(require.context(path, true, new RegExp(`\.(${type.join("|")})$`))); // 
//           } else { 
//                return console.log("Aucun type de fichier n'a été spécifié");
//           }
//      }
// }

//export default new importall(); // export de la classe importAll

// EXEMPLE D'UTILISATION DE LA CLASSE importAll

//let importall = new importAll(); // On instancie la classe importAll

console.log(importall.importAllFiles('./js', ['js'])); // Fonction globale d'importation des fichiers

