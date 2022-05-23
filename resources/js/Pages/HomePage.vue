<template>
    <NavBar />
    <div class="home">
        <section class="hero">
            <div class="hero-text container">
                <h4>One place gathers talents and capitals</h4>
                <hr />
                <h2>hireHub</h2>
                <hr />
            </div>
        </section>
    </div>
</template>

<script>
import mybg from "../assets/images/logo.png";
import NavBar from "../Shared/NavBar.vue";
export default {
    data() {
        return {
            mybg: mybg,
        };
    },
    components: {
        NavBar,
    },
};
</script>

<style lang="scss" scoped>
.hero {
    background-image: url("../assets/images/stars4.jpg");

    background-attachment: fixed;
    position: relative;
    height: 100vh;
    img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
    .hero-text {
        padding-left: 20%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #fff;
        h4 {
            text-transform: uppercase;
            font-size: 22px;
            padding-bottom: 4px;
        }
        h2 {
            font-size: 50px;
            @media (min-width: 550px) {
                font-size: 80px;
            }
        }
        hr:nth-child(2) {
            max-width: 365px;
            margin-bottom: 16px;
        }
        hr:nth-child(4) {
            height: 6px;
            background-color: #fff;
            border: none;
            max-width: 85px;
            margin-top: 16px;
        }
    }
}
</style>
