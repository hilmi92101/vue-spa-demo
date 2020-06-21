<template>
    <p>User: {{ $route.params.id }}</p>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
