import Vue from 'vue';

//Main pages
import Home from "./Vue/pages/Home.vue";

const app = new Vue({
    el: "#home",
    // store,
    components: { Home },
    render: h => h(Home),
});
