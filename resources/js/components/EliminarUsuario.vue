<template>
    <button type="submit" class="btn btn-danger" @click="eliminarUsuario">
        <i class="fa-solid fa-trash"></i>
    </button>
</template>

<script>
export default {
    props: ["usuarioId"],
    mounted() {
        console.log("", this.usuarioId);
    },
    methods: {
        eliminarUsuario() {
            this.$swal({ 
                title: "Deseas Eliminar el Usuario",
                text: "Una vez Eliminado no se puede Recuperar",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "SI",
                cancelButtonText: "No"
            }).then((result) => {
                if (result.isConfirmed) {
                    const params={
                        id: this.recetaId
                    }

                    axios.post(`/usuarios/${this.usuarioId}`, {params, _method: 'delete'})
                    .then(respuesta =>{
                        this.$swal({
                        title:'Usuario Eliminado',
                        text:'Se elimino el Usuario',
                        icon: 'success'});
                        
                        //eliminar distribuidor de DOM
                        this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                    })
                    .catch(error =>
                    {
                        console.log(error)
                    })

                    
                }
            });
        },
    },
};
</script>
