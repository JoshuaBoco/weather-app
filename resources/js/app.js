require('./bootstrap');

window.Vue= require('vue').default;
window.axios= require('axios');

// window.Vue.createApp ({

//     render : (a) => a(require('./components/App.vue').default),


// }).mount('#app')


const app =  new window.Vue({
    el: '#app',
    render : (a) => a(require('./components/App.vue').default),
    
});
