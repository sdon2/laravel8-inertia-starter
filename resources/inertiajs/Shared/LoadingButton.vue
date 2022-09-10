<template>
    <button :disabled="loading" class="d-flex align-items-center">
        <div v-if="loading" class="btn-spinner mr-2">
            <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
        </div>
        <slot />
    </button>
</template>

<style scoped>
.spinner-border {
    -webkit-animation: spinner-border 0.75s linear infinite;
    animation: spinner-border 0.75s linear infinite;
    border: 0.15em solid;
    border-radius: 50%;
    border-right: 0.15em solid transparent;
    display: inline-block;
    height: 1rem;
    vertical-align: middle;
    width: 1rem;
}
</style>

<script>
export default {
    props: {
        loading: Boolean,
    },
};
</script>
