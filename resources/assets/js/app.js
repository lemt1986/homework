
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
import 'v-toaster/dist/v-toaster.css'
Vue.use(VueChatScroll) //Vuescroll plugin que permite mejorar el scrolling

import Toaster from 'v-toaster'
Vue.use(Toaster, {timeout: 5000}) //Plugin de notificacion

//Creamos el componente message con la siguiente plantilla message.vue
import Conversation from "./components/Conversation";
import Chats from "./components/Chats";
import Message from "./components/Message";
import Sent from "./components/Sent";
import NewChat from "./components/NewChat";
Vue.component('message', Message);
Vue.component('sent-message', Sent);
Vue.component('new-chat', NewChat);
Vue.component('chats', Chats);
Vue.component('conversation', Conversation);

const app = new Vue({
    el: '#app',
    data(){
        return {
            conversations:[],
            messages: [],
            chats: []
        }
    },
    mounted() {
        this.fetchChats();
        Echo.private(`App.User.${user_id}`)
            .listen('NewChatEvent', (e) => {
                console.log(e)
                this.chats.push(e)
            })
    },
    methods: {
        addMessage(message) {
            this.messages.push(message)
            axios.post('/messages', message).then(response => {
                //console.log(response)
            })
        },
        newChat(user_id){
            axios.post('/chat/new', user_id).then(response => {
                //Crea un nuevo chat
                this.chats.push(response.data);
            });
        },
        fetchChats() {
            var _this = this;
            axios.get('/chat/all').then(response => {
                response.data.map(function(value, key) {
                    _this.chats.push(value);
                });
            })
        }
    }
});
