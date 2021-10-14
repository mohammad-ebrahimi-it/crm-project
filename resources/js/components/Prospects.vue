<template>
    <div>
        {{info}}
    </div>
</template>
<script>

export default {

    data () {
        return {
            info: null
        }
    },
    created () {
        axios
            .get('http://localhost/crm-project/public/api/get/customers')
            .then((response) =>{
                this.info = response
            } )
    }

}
</script>
