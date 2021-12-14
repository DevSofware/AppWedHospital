import { HTTP } from "@/core/Services/http-services.js";

export default class Medico {
  constructor(Info) {
    this.data = Info;

  }
  Guarda() {
    HTTP.post("api/medicoSave", this.data)
      .then((res) => {
        console.log(res);
      })
      .catch((e) => {
        console.log(e);
      });
  }
  GetAll() {
    var datos;
     HTTP.get("api/medicoIndex")
      .then((res) => {
       
        datos= res.data.data;
      })
      .catch((e) => {
        console.log(e);
      });
      return datos;
  }
}