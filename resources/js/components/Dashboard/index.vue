<template>
    <div>
        Projects: {{projects.length}}
        Clients: {{clients.length}}
        Staff: {{staff.length}}

    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    data() {
        return {

        }
    },

    computed: {
        ...mapGetters({
            projects: 'projects',
            clients: 'clients',
            staff: 'staff'
        })
    },

    mounted() {
        
    }
}
</script>