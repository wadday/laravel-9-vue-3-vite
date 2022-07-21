<template>
    <div class="py-10 px-20 text-center bg-blue-400 rounded-xl text-white">
        <span class="text-2xl">{{ name }}</span>
    </div>
</template>

<script setup>
const props = defineProps({
    name: null,
})
</script>