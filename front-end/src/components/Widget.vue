<template>    
<section ref="widget">
  <b-navbar toggleable="lg" type="dark" variant="dark">
    <b-navbar-brand @click="$router.push('/')">Hospital Acme</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav class="ml-auto">
      
        <b-nav-item-dropdown right>
          <template #button-content>
            <em>User</em>
          </template>
          <b-dropdown-item @click="$router.push('/login')" >Perfil</b-dropdown-item>
          <b-dropdown-item href="#">Cerrar sesion</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</section>
</template>

<script>
export default {
  components: {  },
        name: 'Widget',
        data() {
            return {
                
            };
        },
        methods: {
           
        },
    };
</script>
