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

            <button type="submit" class="btn btn-dark btn-lg btn-block">Ingresar</button>

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
export default {
        name: 'LoginPage',
        data() {
            return {
                model: {
<<<<<<< Updated upstream
                    email: '',
                    password: ''
=======
                    email: 'Medico1@gmail.com',
                    password: '123'
>>>>>>> Stashed changes
                },
                loading: false,
            };
        },
        methods: {
            Login() {
<<<<<<< Updated upstream
                this.loading = true;
                this.loading = false;
=======
                HTTP.get('sanctum/csrf-cookie').then(() => {
                    HTTP.post("login",this.model).then(res=>{
                    console.log(res);
                });
                });
>>>>>>> Stashed changes

                
            },
        },
    };
</script>

<style src="@/assets/css/main.css" lang="css" />
