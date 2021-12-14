<template>
  <div>
    <p></p>

    <div>
      <h4>Bienvenido</h4>
    </div>
    <div>
      <b-table striped hover :items="medicos"></b-table>
    </div>
    <div>
      <b-table striped hover :items="pacientes"></b-table>
    </div>
  </div>
</template>

<script>
import { HTTP } from "@/core/Services/http-services.js";

export default {
  name: "Dashboard",
  data() {
    return {
      pacientes: [],
      medicos: [],
    };
  },
  mounted() {
    this.getMedico();
    this.getPacientes();
  },
  methods: {
    getMedico() {
     
      HTTP.get("api/medicoIndex").then((res) => {
        console.log(res);
        this.medicos = res.data.data;
      });
    },
    getPacientes() {
      HTTP.get("api/pacienteIndex").then((res) => {
        console.log(res);
        this.pacientes = res.data.data;
      });
    },
  },
};
</script>
