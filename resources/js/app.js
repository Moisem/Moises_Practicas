require('./bootstrap');

window.Vue = require('vue');

Vue.component('pokemoncomponent', require('./components/PokemonComponent.vue').default);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});
