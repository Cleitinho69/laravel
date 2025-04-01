<template>
    <div>
        <h1>Resultado:</h1>
        <section>
            <span>altura: {{ peso_ideal }}</span>
            <span>Sexo: {{ sexo }}</span>
            <span>Peso ideal: {{ altura }}</span>
        </section>

        <button>
            <a href="/">Voltar</a>
        </button>
    </div>
</template>

<script>
export default {
    props:{
        peso_ideal: Number,
        sexo: String,
        altura: Number
    }
}
</script>