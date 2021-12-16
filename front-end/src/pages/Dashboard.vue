<template>
  <div id="divPadre">
    <div>
      <h2>Bienvenido</h2>
    </div>
    <br/>
    <div>
      <b-card no-body  >
        <b-tabs card>
          <b-tab title="Medicos" active>
            <b-table striped hover :items="medicos"></b-table>
          
                
          </b-tab>
          <b-tab title="Pacientes">
            <b-table striped hover :items="pacientes"></b-table>
          </b-tab>
        </b-tabs>
      </b-card>
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
