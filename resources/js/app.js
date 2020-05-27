/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
window.Fire = new Vue();
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const follow = require("./components/FollowComponent.vue").default;
const lileBtn = require("./components/LikeComponent.vue").default;

Vue.component(
    "follow-component",
    require("./components/FollowComponent.vue").default
);
Vue.component(
    "like-component",
    require("./components/LikeComponent.vue").default
);
Vue.component(
    "search-component",
    require("./components/SearchComponent.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const followBtn = new Vue({
    el: "#followBtn"
});
const likeBtn = new Vue({
    el: "#likeBtn"
});
const search = new Vue({
    el: "#search",
    data: {
        search: "11"
    },
    methods: {
        searchIt: _.debounce(() => {
            console.log(1);
        })
    }
});