<template>
    <div>
        <div class="dot" :style="cs"></div>
        <v-color-picker :hidden="picker_showing" v-model="value"></v-color-picker>
    </div>
</template>

<script>
    export default {
        name: "ColorDotPicker",
        data() {
            return {
                colorSelection: null,
                picker_showing: false
            }
        },
        props: ['value'],
        computed: {
            cs() {
                return { background_color: this.value }
            }
        }
    }
</script>

<style scoped>
    .dot {
        border-radius: 50%;
        height: 25px;
        width: 25px;
        margin: auto;
        border: 2px solid white;
    }
</style>