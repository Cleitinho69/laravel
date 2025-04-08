<template id="telaResult">
    <div id="mostrarResult">
        <h1>Resultado:</h1>
        <section>
            <span>altura: {{ altura }}</span>
            <span>Sexo: {{ sexo }}</span>
            <span>Peso ideal: {{ peso_ideal }}</span>
        </section>

        <button>
            <a href="/">Voltar</a>
        </button>
    </div>
</template>

<style>

body,html{
    width: 100vw;
    height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;
}

</style>

<style scoped>
#mostrarResult{
    height: 300px;
    width: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border: 2px black solid;
}

section{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

span{
    margin: 10px;
}
</style>

<script>
export default {
    props:{
        peso_ideal: Number,
        sexo: String,
        altura: Number
    }
}
</script>