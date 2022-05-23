<template>
    <div>
        Create Part

        <Link href="/post/index"> Return Index Page</Link>

        <form @submit.prevent="submit">
            <div class="form-group">
                <label for="name">Name</label>
                <input
                    v-model="form.name"
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Name"
                />
            </div>
            <div class="form-group">
                <label for="surname">Content</label>
                <input
                    v-model="form.surname"
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Name"
                />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>
<script setup>
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-vue3";

let form = {
    name: "",
    surname: "",
};
let submit = () => {
    let data = {
        name: form.name,
        surname: form.surname,
    };
    Inertia.post('/post/create', data);

};
   
</script>
<style></style>
