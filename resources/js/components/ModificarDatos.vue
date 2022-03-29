<template>
    <input
        type="submit"
        class="btn btn-primary d-line mr-1"
        value="Actualizar"
        @click="Actualizar"
    />
</template>

<script>
export default {
    methods: {
        Actualizar() {
            this.$swal({
                position: "center",
                icon: "success",
                title: "Datos Actualizados",
                showConfirmButton: false,
                timer: 1500,
            });
    
        },
    },
};
</script>
