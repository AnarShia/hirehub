<template>
   <div v-if="OpenPopUp" class="container">
        <div class="block p-6 rounded-lg shadow-lg bg-white">
        <form @submit.prevent="submit" class="max-w-md mx-auto mt-7">
            <div class="form-group mb-6">
                <input
                    v-model="form.title"
                    type="text"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    
                    aria-describedby="emailHelp123"
                    placeholder="Job Title"
                    required
                />
            </div>

            <div class="form-group mb-6">
                <input
                    v-model="form.salary"
                    type="email"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    
                    placeholder="Expected Salary"
                    required
                />
            </div>
            <div class="form-group mb-6">
                <input
                    v-model="form.duration"
                    type="password"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                   
                    placeholder="Duration"
                    required
                />
            </div>
            <div class="form-group mb-6">
                <input
                    v-model="form.description"
                    type="text"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    
                    aria-describedby="emailHelp123"
                    placeholder="Description"
                    required
                />
            </div>
           
            <button
                type="submit"
                class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
            >
                Post Job
            </button>
        </form>
        
    </div>
   </div>
</template>

<script setup>
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";
const form = reactive({
    
    title: "",
    salary: "",
    duration: "",
    description: "",
});


defineProps({
   OpenPopUp: Boolean,
})
let submit = ()=>{
   
    Inertia.post('/companies',form);
    
}
</script>
<script>
export default{


}
</script>
<style></style>
