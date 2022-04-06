<template>
    <input
        type="submit"
        class="btn btn-primary d-line mr-1"
        value="Enviar Mensaje"
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
                title: "Garcias Por Contactarnos. ",
                showConfirmButton: false,
                timer: 1500,
            });
        },
    },
};
</script>
