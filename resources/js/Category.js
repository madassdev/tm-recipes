import Vue from 'vue';

//Main pages
import Home from "./Vue/pages/Home.vue";

const app = new Vue({
    el: "#category",
    // store,
    components: { Home },
    render: h => h(Home),
});
