<template>
  <div id="divPadre">
    <div class="vue-tempalte">
      <form class="form">
        <h3>Registrar nuevo paciente</h3>
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
          <b-col>
            <b-form-group label="Edad:" label-for="Edad">
              <b-form-input
                id="Edad"
                type="number"
                v-model.number="model.Edad"
                placeholder="Edad"
              ></b-form-input> </b-form-group
          ></b-col>
        </b-row>

        <b-row>
          <b-col>
            <b-form-textarea
              v-model="model.Motivo"
              id="textarea-rows"
              placeholder="Escriba el diagnóstico inicial del paciente"
              rows="3"
            >
            </b-form-textarea>
          </b-col>
        </b-row>
        <br />

        <button
          type="submit"
          @click="Signpatient()"
          class="btn btn-dark btn-lg btn-block"
        >
          Ingresar paciente
        </button>
      </form>
    </div>
  </div>
</template>

<script>
import { HTTP } from "@/core/Services/http-services.js";

export default {
  name: "SignPatientPage",
  data() {
    return {
      model: {
        Nombre: "",
        Apellido: "",
        CC: 0,
        Edad: 0,
        Motivo: "",
      },
      loading: false,
      selected: null,
      options: [
        { value: null, text: "Seleccione el tipo de documento" },
        { value: "a", text: "Cedula de ciudadanía" },
        { value: "b", text: "Tarjeta de identidad" },
        { value: "b", text: "Cédula de extranjería" },
        { value: "c", text: "Registro civil" },
      ],
    };
  },
  methods: {
    Signpatient() {
      HTTP.post("api/pacienteSave", this.model)
        .then((res) => {
          console.log(res);
        })
        .catch((e) => {
          console.log(e);
        });
    },
  },
};
</script>

<style src="@/assets/css/main.css" lang="css" />
