<template>
    <div>
        fgdfgdf
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'StaffIndex',

    mounted() {
        axios.get('/api/staff')
            .then(response => {

                console.log('success', response)
  
            }).catch(err => {


                console.log(err, 'Unable to fetch clients')
            })
    }
}
</script>