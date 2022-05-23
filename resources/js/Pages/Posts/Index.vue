<template>
    <div>
        <ul>
            <li v-for="post in posts" :key="post.id">
                {{ post.name }}
            </li>
        </ul>
        <Link href="/post/create"> Create</Link>
    </div>
</template>
<script>
export default {
    
}
</script>
<script setup>
import {Link} from '@inertiajs/inertia-vue3'
defineProps({
    posts:Array,
})

</script>
<style >
    
</style>