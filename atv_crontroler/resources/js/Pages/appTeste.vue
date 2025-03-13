<template>
  <div>
    <div>
      <p>Nome: {{ usuario }}</p>
    </div>
    <div>
      <p>Perfil: {{ perfil }}</p>
    </div>
    <div>
      <p>Empresa: {{ empresa }}</p>
    </div>
  </div>
</template>

<script>
export default {
    props:{
        usuario: String,
        perfil: String,
        empresa: String
    }
}
</script>