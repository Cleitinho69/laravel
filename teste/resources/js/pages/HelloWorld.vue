<template>
    <div id="pai">
        <form action="">
            <input type="text" v-model="txt">
        </form>

        <div id="tela">
            <p id="texto"> {{ txt }} </p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            txt: ''
        }
    }
}
</script>

<style scoped>

#pai {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
}

#texto {
    width: 100%;
    height: 100%;
    display: flex;
    flex-wrap: wrap;
    text-align: center;
    font-size: 20px;
}

#tela {
    margin: 30px;
    background-color: #f0f0f0;
    width: 200px;
    height: 200px;
    border: 1px solid #000;
    border-radius: 20px;
}
</style>