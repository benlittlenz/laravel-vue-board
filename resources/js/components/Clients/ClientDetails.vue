<template>

</template>

<script>
import axios from 'axios'
export default {
    name: 'ClientDetails',

    data() {
        return {
            client: []
        }
    },

    mounted() {
        axios.get(`/api/clients/${this.$route.params.id}`)
            .then(res => {
                this.client = res.data;
                console.log(res, 'success')
            }).catch(error => {
                console.log(error)
            })
    }
}
</script>