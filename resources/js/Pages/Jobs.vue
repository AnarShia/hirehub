<template>
    <NavBar />
    <AboveOfCards></AboveOfCards>
    <Card :profileInfo="job" v-for="job in jobs" :key="job.id"></Card>
</template>

<script>
import AboveOfCards from "@/Components/containerForVue/aboveOfCards.vue";
import Card from "@/Components/containerForVue/Card.vue";
import NavBar from "@/Shared/NavBar.vue";
export default {
    components: {
        Card,
        AboveOfCards,
        NavBar,
    },
    data: function () {
        return {
            togglePopup: false,
            jobs: [],
            isEmployee: false,
        };
    },

    methods: {
        openClosePopup: function () {
            this.togglePopup = !this.togglePopup;
        },
        addJob: function (event) {
            this.jobs.push({
                title: event.title,
                nameSurname:
                    event.nameSurname == null
                        ? "Çağrı Karaca"
                        : event.nameSurname,
                salary: event.salary,
                duration: event.duration,
                description: event.description,
                category: event.category,
                id: this.jobs.length + 1,
            });
        },
    },
};
</script>

<style scoped>
body {
    min-height: 100vh;
    justify-content: center;
    align-items: center;
}
.add-btn {
    margin: 20px;
    position: absolute;
    bottom: 0;
    right: 0;
    border: solid 3px #10181b;
    background-color: #e44753;
    color: #10181b;
    font-size: 30px;
    aspect-ratio: 1;
    border-radius: 50%;
    display: grid;
    place-items: center;
    padding: 0 20px;
    transition: calc(0.5s);
}
.add-btn:hover {
    transform: scale(1.1);
    cursor: pointer;
}
</style>
