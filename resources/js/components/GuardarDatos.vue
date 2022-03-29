<template>
    <input
        type="submit"
        class="btn btn-primary d-line mr-1"
        value="Guardar"
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
                title: "Registro con Exito",
                showConfirmButton: false,
                timer: 1500,
            });
        },
    },
};
</script>
