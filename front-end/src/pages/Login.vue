<template>
<div id="divPadre">
    <div class="vue-tempalte" id="divHijo">
        <form class="form">
            <h3>Iniciar sesión</h3>

            <div class="form-group">
                <label>Correo electrónico</label>
                <input type="email" class="form-control form-control-lg" />
            </div>

            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control form-control-lg" />
            </div>

            <button @click="Login" class="btn btn-dark btn-lg btn-block">Ingresar</button>

            <p class="forgot-password text-right mt-2 mb-4">
                <router-link to="/forgot-password">Olvidaste la contraseña?</router-link>
            </p>

            <div class="social-icons">
                <ul>
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>

        </form>
    </div>
</div>
</template>

<script>
import {HTTP} from "@/core/Services/http-services.js"

export default {
        name: 'LoginPage',
        data() {
            return {
                model: {
                    email: 'prueba2@hotmail.com',
                    password: '1234'
                },
                loading: false,
            };
        },
        methods: {
            Login() {
                HTTP.defaults.withCredentials = true;
                HTTP.get('sanctum/csrf-cookie').then(() => {
                    HTTP.post("login",this.model).then(res=>{
                    console.log(res);
                });
                });

                
            },
        },
    };
</script>

<style src="@/assets/css/main.css" lang="css" />
