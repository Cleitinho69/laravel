<template>
  <div @loadstart="enviar">
    <form action="" @submit.prevent="enviar">
      <input type="number" id="numero"/>
      <input type="submit" value="Enviar" />
    </form>

    <p>{{ mensagem }}</p>
  </div>
</template>

<script>

import { useForm } from "@inertiajs/vue3";
import { data } from "autoprefixer";

export default {
  name: "Welcome",
  props: {
    mensagem: String,
  },
  methods: {
    enviar() {
        var numero = document.getElementById("numero").value;
    
      const form = useForm({
        numero: numero,
      });

      form
        .get("/")
    },
  },
};
</script>