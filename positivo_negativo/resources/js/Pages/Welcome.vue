<template>
    <div>
        <form action="">
            <input type="number" v-model="numeroEnviar">
            <input type="submit" value="Enviar">
        </form>

        <p> {{ mensagem }} </p>
    </div>
</template>

<script>
    export default{
        name:'Welcome',
        props: {
            mensagem: String
        }
    }
</script>