<template>
    <button 
    type="submit"
    class="btn btn-danger mt-1 d-line"
    @click="eliminardistribuidor">
   <i class="fa-solid fa-user-xmark"></i>
    </button>
</template>

<script>
export default {
    props: ["distribuidorId"],
    mounted() {
        console.log("distribuidor actual", this.distribuidorId);
    },
    methods: {
        eliminardistribuidor() {
            this.$swal({ 
                title: "Deseas Eliminar el distribuidor",
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

                    axios.post(`/distribuidores/${this.distribuidorId}`, {params, _method: 'delete'})
                    .then(respuesta =>{
                        this.$swal({
                        title:'distribuidor eliminado',
                        text:'Se elimino el Distribuidor',
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
