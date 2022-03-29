<template>
     <button 
    type="submit"
    class="btn btn-danger "
    @click="eliminarMetal">
<i class="fa-solid fa-trash"></i>    </button>
</template>

<script>
export default {
    props: ["metalId"],
    mounted() {
      
    },
    methods: {
        eliminarMetal() {
            this.$swal({ 
                title: "Deseas Eliminar el Metal",
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
                        id: this.metalId
                    }

                    axios.post(`/metales/${this.metalId}`, {params, _method: 'delete'})
                    .then(respuesta =>{
                        this.$swal({
                        title:'Metal eliminado',
                        text:'Se Elimino el Metal de la Lista',
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
