<template>
    <div>
        <div class="TopBar">
            <button @click="clear">Clear</button>
            <button  @click="frontEnd">Front End</button>
            <button  @click="backEnd">Back End</button>
            <button  @click="fullStack">FullStack</button>
            <button  @click="software">Software</button>
        </div>
    </div>
</template>
<script>

export default {
    data() {
        return {
           
        }
    },
    methods: {
        clear() {
            this.$emit('clear');
        },
        frontEnd() {
            this.$emit('frontEnd');
        },
        backEnd() {
            this.$emit('backEnd');
        },
        fullStack() {
            this.$emit('fullStack');
        },
        software() {
            this.$emit('software');
        },
               },
        addJob(job) {
            this.jobs.push(job);
        },
        clear() {
            this.jobs = [];
        },
        frontEnd() {
            this.jobs = this.jobs.filter(job => job.category === 'Front-End');
        },
        backEnd() {
            this.jobs = this.jobs.filter(job => job.category === 'Back-End');
        },
        fullStack() {
            this.jobs = this.jobs.filter(job => job.category === 'Full-Stack');
        },
        software() {
            this.jobs = this.jobs.filter(job => job.category === 'Software');
        },
        }
</script>
<style scoped>
*{  
    
    height: 100%;
    margin: auto;
    padding: 0;
}
.TopBar button{
    width: 100px;
    height: 30px;
    background-color: #000;
    color: #fff;
    border-radius: 5px;
    border: none;
    outline: none;
    cursor: pointer;
    margin: 10px;
}
.TopBar{
    width: 100%;
    height: 10%;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.TopBar button:hover{
    background-color: #fff;
    color: #000;
}

</style>