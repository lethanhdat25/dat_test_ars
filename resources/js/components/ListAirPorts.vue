<template>

</template>

<script>
export default {
    name: "LIstAirPorts",
    created() {
        const getData=async ()=>{
            const res=await axios.get("api-airport");
            return res.data
        }
        getData()
    }
}
</script>

<style scoped>

</style>
