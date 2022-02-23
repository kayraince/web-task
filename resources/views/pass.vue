<template>

</template>

<script>
export default {
    props: ['pack'],

    data() {
        return {
            name: this.product.name,
            selected: ''
        }
    },

    methods: {
        addtocart() {
            axios.post('/Summary/', this.$data)
                .then(flash(this.product.name + ' was added to cart'));
        }
    }
}

</script>

<style scoped>

</style>
