<template>
    <input
        type="submit"
        class="btn btn-primary d-line mr-1"
        value="Enviar Cotizacion"
        @click="Guardar"
    />
</template>

<script>
export default {
    methods: {
        Guardar() {
            this.$swal({
                position: "center",
                icon: "success",
                title: "Cotizacion Realizada. Esprere nuestra respuesta",
                showConfirmButton: false,
                timer: 2000,
            });
        },
    },
};
</script>
