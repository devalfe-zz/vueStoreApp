<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 v-if="ganador">El ganador es: {{ ganador }}</h1>
                <div v-else>
                    <div class="text-info">Personas</div>
                    <ul>
                        <li v-for="persona in listado">{{ persona }}</li>
                    </ul>
                </div>
                <button type="button" class="btn btn-primary" @click="elegirGanador">Elegir ganador</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["listado"],
    data() {
        return {
            ganador: false,
            participantes: this.listado
            //personas: ["Juan", "Alicia", "Pedro", "Javier", "Marcos"]
        };
    },
    methods: {
        elegirGanador() {
            let cantidad = this.participantes.length;
            let index = Math.floor(Math.random() * cantidad);
            this.ganador = this.participantes[index - 1];
        }
    },
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
