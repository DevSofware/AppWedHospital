import { HTTP } from "@/core/Services/http-services.js";

export default class Administrador {
    constructor(Info) {
        this.data = Info;
    }

    Guarda() {
        HTTP.post("api/administradorSave", this.data)
            .then((res) => {
                console.log(res);
            })
            .catch((e) => {
                console.log(e);
            });
    }

    GetAll() {
        return HTTP.get("api/administradorIndex")
            .then((res) => {
                console.log(res);
            })
            .catch((e) => {
                console.log(e);
            });
    }
}