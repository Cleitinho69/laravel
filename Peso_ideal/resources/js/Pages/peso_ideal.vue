<template>
  <div>
      <form @submit.prevent="enviar" action="" >
          <div id="alt">
              <label for="altura">Digite a sua altura (centimetro):</label>
              <input type="number" placeholder="ex.: 170" v-model="edtAlt" step="any">
          </div>

          <div id="sex_feminino">
              <label for="feminino">Feminino:</label>
              <input type="radio" name="rd_sexo" value="feminino" v-model="edtSex">
          </div>
          <div id="sex_masculino">
              <label for="masculino">Masculino:</label>
              <input type="radio" name="rd_sexo" value="masculino" v-model="edtSex">
          </div>

          <button type="submit">Enviar</button>
      </form>
  </div>
</template>

<style>
body,html{
    width: 100vw;
    height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
</style>

<style scoped>
form{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

div{

    margin: 5px;
}
</style>

<script>
import { useForm } from "@inertiajs/vue3";

export default {
  data(){
      return{
          edtAlt: '',
          edtSex: ''
      }
  },
  methods: {
      enviar(){
          const form = useForm({
              alt: this.edtAlt,
              sex: this.edtSex
          });

          form.get('/calc')
      }
  },
}
</script>