import Medico from "./Medico.js"
import Administrador from "./Administrador.js"
import Auxiliar from "./Auxiliar.js"

export  class Usuario {
  constructor(Info, permiso) {
    var user;
    if (permiso === "Medico") {
      user = new Medico(Info);
    } else if (permiso === "Administrador") {
      user = new Administrador(Info);
    } else if (permiso === "Auxiliar") {
      user = new Auxiliar(Info);
    } 
    return user;
  }

}