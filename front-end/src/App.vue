<template>
<div>
  <widget>
  </widget>
  <br>
  <br>
  <router-view  style=""/>

</div>

</template>


<script>
import Widget from "./components/Widget.vue"
import '@/assets/css/main.css'

export default {
  components: { Widget },
  name: "App",
};
  
</script>

<style src="./styles/theme.scss" lang="scss" />
