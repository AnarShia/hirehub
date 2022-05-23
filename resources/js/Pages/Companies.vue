<template>
    <NavBarVue></NavBarVue>
    <PopUp :OpenPopUp="togglePopup"></PopUp>
    <div v-if="!togglePopup">
        <AboveOfCards></AboveOfCards>

        <div v-bind="width" v-if="width > 425">
            <CardBig
                :profileInfo="job"
                v-for="job in jobs"
                :key="job.id"
            ></CardBig>
        </div>
        <div v-if="width < 425">
            <Card :profileInfo="job" v-for="job in 20" :key="job.id"></Card>
        </div>
    </div>

    <button class="add-btn" @click="openClosePopup">New Post</button>
</template>

<script>
import AboveOfCards from "@/Components/containerForVue/aboveOfCards.vue";
import Card from "@/Components/containerForVue/Card.vue";
import CardBig from "@/Components/containerForVue/CardBig.vue";
import NavBarVue from "@/Shared/NavBar.vue";
import PopUp from "@/Components/containerForVue/popUp.vue";
export default {
    components: {
        Card,
        AboveOfCards,
        CardBig,
        NavBarVue,
        PopUp,
    },
    data: function () {
        return {
            togglePopup: false,
            
            width: window.innerWidth,
        };
    },
    props: {
        jobs: Array,
    },
    methods: {
        openClosePopup: function () {
            this.togglePopup = !this.togglePopup;
        },
    },
};
</script>

<style scoped>
body {
    position: absolute;
    min-height: 100vh;
    justify-content: center;
    align-items: center;
}
.add-btn {
    margin: 20px;
    position: fixed;
    bottom: 0;
    right: 0;
    z-index: 3;
    border: solid 3px #10181b;
    background-color: #e44753;
    color: #10181b;
    font-size: 10px;
    aspect-ratio: 1;
    border-radius: 50%;
    display: grid;
    place-items: center;
    padding: 0 10px;
    transition: calc(0.5s);
}
.add-btn:hover {
    transform: scale(1.1);
    cursor: pointer;
}
</style>
