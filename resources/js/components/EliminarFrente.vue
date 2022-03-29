<template>
    <button type="submit" class="btn btn-danger" @click="eliminarFrente">
        <i class="fa-solid fa-trash"></i>
    </button>
</template>

<script>
export default {
    props: ["frenteId"],
    mounted() {},
    methods: {
        eliminarFrente() {
            this.$swal({
                title: "Deseas Eliminar el Frente",
                text: "Una vez Eliminado no se puede Recuperar",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI",
                cancelButtonText: "No",
            }).then((result) => {
                if (result.isConfirmed) {
                    const params = {
                        id: this.frenteId,
                    };

                    axios
                        .post(`/frentes/${this.frenteId}`, {
                            params,
                            _method: "delete",
                        })
                        .then((respuesta) => {
                            this.$swal({
                                title: "Frente eliminado",
                                text: "Se Elimino el Frente de la Lista",
                                icon: "success",
                            });

                            //eliminar distribuidor de DOM
                            this.$el.parentNode.parentNode.parentNode.removeChild(
                                this.$el.parentNode.parentNode
                            );
                        })
                        .catch((error) => {
                            console.log(error);
                        });
                }
            });
        },
    },
};
</script>
