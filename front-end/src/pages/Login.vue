<template>
    <div class="divlogin">
        <div class="container">
            <div class="divcont">
                <h3>Login</h3>
                <form @submit.prevent="sendForm()">
                    <input type="email" :class="{'error':validateEmail}" placeholder="correo electronico" v-model=form.email>
                    <input type="password" :class="{'error':validatePassword}" placeholder="contraseña" v-model=form.password>
                    <button>Iniciar sesion</button>
                </form>
            </div>
        </div>
    </div>
</template>

