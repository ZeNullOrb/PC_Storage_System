require('./bootstrap');

import Vue from 'vue';

import Part from './Components/part.vue'

new Vue({
    el: '#app',
    components:{
        'part': Part
    }
})
