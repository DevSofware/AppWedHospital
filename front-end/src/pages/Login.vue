<template>
    <div>
        <widget>
        </widget>
        <p></p>

            <div class="auth-page">
                <b-container>
                    
                    <h5 class="auth-logo">
                        <i class="fa fa-circle text-primary"></i>
                        Sing App
                        <i class="fa fa-circle text-danger"></i>
                    </h5>
                        <b-form @submit.prevent="Login">
                            <p class="widget-auth-info">
                                Use your email to sign in.
                            </p>
                            <div class="form-group">
                                <input class="form-control no-border" v-model="model.email" type="text" name="email" placeholder="Email" required />
                            </div>
                            <div class="form-group">
                                <input class="form-control no-border" v-model="model.password" type="password" name="password" placeholder="Password" required />
                            </div>
                            <b-button type="submit" size="sm" class="auth-btn mb-3" variant="inverse">Login</b-button>
                            <div v-show="loading" class="text-center"><b-spinner label="Spinning" small></b-spinner></div>
                        </b-form>
                </b-container>        
            </div>
    </div>

</template>

<script>
import widget from '@/components/Widget.vue';
export default {
  components: { widget },
        name: 'LoginPage',
        data() {
            return {
                model: {
                    email: '',
                    password: ''
                },
                loading: false,
            };
        },
        methods: {
            Login() {
                this.loading = true;
                this.loading = false;

                
            },
        },
    };
</script>
