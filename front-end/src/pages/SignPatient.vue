<template>
<div id="divPadre">
    <div class="vue-tempalte" id="divHijo">
        <form class="form">
            <h3>Registrar nuevo paciente</h3> <br> <br>

            <b-form-select v-model="selected" :options="options"></b-form-select>
            <br>
            <br>

            <div class="form-group">
                <label>Número de documento</label>
                <input type="text" class="form-control form-control-lg" />
            </div>
    
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control form-control-lg" />
            </div>

            <div class="form-group">
                <label>Apellidos</label>
                <input type="text" class="form-control form-control-lg" />
            </div>

            <div class="form-group">
                <label>Edad</label>
                <input type="number" class="form-control form-control-lg" />
            </div>

            <div>
               <b-form-textarea
               id="textarea-rows"
               placeholder="Escriba el diagnóstico inicial del paciente"
               rows="8"
            > </b-form-textarea>
            </div>
            <br>

            <button type="submit" class="btn btn-dark btn-lg btn-block">Ingresar paciente</button>


        </form>
    </div>
</div>
</template>

<script>
export default {
        name: 'SignPatientPage',
        data() {
            return {
                model: {
                    documento:'',
                    nombre: '',
                    apellido: '',
                    edad: Number,
                    Estado: '',
                },
                loading: false,
                selected: null,
                options: [
                    {value: null, text:'Seleccione el tipo de documento'},
                    {value: 'a', text:'Cedula de ciudadanía'},
                    {value: 'b', text:'Tarjeta de identidad'},
                    {value: 'b', text:'Cédula de extranjería'},
                    {value: 'c', text:'Registro civil'},
                ]
            };
        },
        methods: {
            Signpatient() {
                this.loading = true;
                this.loading = false;

                
            },
        },
    };
</script>

<style src="@/assets/css/main.css" lang="css" />
