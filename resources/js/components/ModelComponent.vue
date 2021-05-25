<template>
    <h1>This is v-model</h1>
    <input v-model="message" placeholder="入力してください">
    <p>{{ message }}</p>
</template>
<script>
export default {
    data() {
        return {
            message: 'default message'
        }
    }
}
</script>
