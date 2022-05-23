<template>
    <div>
        <PopUp :OpenPopUp="OpenClose"> </PopUp>
        <div v-if="!OpenClose">
            hello
            <ul>
                <li v-for="user in users" :key="user.id">
                    {{ user.name }}
                </li>
            </ul>
            <button @click="submit()">Change</button>
            Paginate
            <Link
                v-for="link in users.links"
                :key="link"
                v-html="link.label"
                :href="link.url"
            ></Link>
        </div>
    </div>
</template>
<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import PopUp from "@/Components/containerForVue/popUp.vue";
import { Inertia } from "@inertiajs/inertia";
defineProps({
    users: Array,
    openClose: Boolean,
    OpenPopUp: Boolean,
});

</script>
<script>
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";

export default {
    data() {
        return {
            form: reactive({
                name: "",
                email: "",
                password: "",
                country: "",
                city: "",
            }),
            
            OpenClose: false,
        };
    },
    methods: {
        submit() {
            //Inertia.post('/users',this.form);
            this.OpenClose = true;
        },
    },
};
</script>
<style></style>
