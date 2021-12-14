import { HTTP } from "@/core/Services/http-services.js";

export  default class Auxiliar {
    constructor(Info) {
        this.data = Info;    
      }

      Guarda() {
        HTTP.post("api/AuxiliarSave", this.data)
          .then((res) => {
            console.log(res);
          })
          .catch((e) => {
            console.log(e);
          });
      }

      GetAll() {
        return HTTP.get("api/AuxiliarIndex")
            .then((res) => {
                console.log(res);
            })
            .catch((e) => {
                console.log(e);
            });
    }
    }