<template>
  <div id="divPadre">
    <div class="vue-tempalte">
      <form class="form">
        <h3>Registrar médico</h3>
        <br />

        <b-row>
          <b-col>
            <b-form-group label="Número de documento:" label-for="documento">
              <b-row>
                <b-col>
                  <b-form-select
                    v-model="selected"
                    :options="options"
                  ></b-form-select>
                </b-col>
                <b-col>
                  <b-form-input
                    type="number"
                    id="documento"
                    v-model.number="model.CC"
                    placeholder="Número de documento"
                    required
                  ></b-form-input>
                </b-col>
              </b-row>
            </b-form-group>
          </b-col>
        </b-row>

        <b-row>
          <b-col>
            <b-form-group label="Nombre:" label-for="Nombre">
              <b-form-input
                id="Nombre"
                type="text"
                v-model="model.Nombre"
                placeholder="Nombre"
                required
              ></b-form-input>
            </b-form-group>
          </b-col>
          <b-col>
            <b-form-group label="Apellidos:" label-for="Apellidos">
              <b-form-input
                id="Apellidos"
                type="text"
                v-model="model.Apellido"
                placeholder="Apellidos"
                required
              ></b-form-input> </b-form-group
          ></b-col>
        </b-row>

        <br />

        <button
          type="submit"
          @click="Signpatient"
          class="btn btn-dark btn-lg btn-block"
        >
          Ingresar médico
        </button>
        <br />

      </form>



    </div>
  </div>
</template>

<script>

import { Usuario } from "@/core/Model/Usuario.js";
export default {
  name: "SignDoctorPage",
  data() {
    return {
      model: {
        Nombre: "",
        Apellido: "",
        CC: 0,
      },
      medicos: [],

      loading: false,
      selected: null,
      options: [
        { value: null, text: "Seleccione el tipo de documento" },
        { value: "a", text: "Cedula de ciudadanía" },
        { value: "b", text: "Cédula de extranjería" },
      ],
    };
  },
  mounted() {
    this.getMedico();
  },
  methods: {
    
    Signpatient() {
      let medico = new Usuario(this.model, "Medico");
      medico.Guarda();
    },
  },
};
</script>

