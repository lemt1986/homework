<template>
    <div class="chatbox chatbox22" v-bind:class="this.chatstatus.tray">
        <div class="chatbox__title">
            <h5><a href="#">{{ this.title }}</a></h5>
            <button class="chatbox__title__tray" v-on:click="tray()">
                <span></span>
            </button>
            <button class="chatbox__title__close" >
                    <span>
                        <svg viewBox="0 0 12 12" width="12px" height="12px">
                            <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>
                            <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>
                        </svg>
                    </span>
            </button>
        </div>
        <message :messages="messages" :user_id="user_id"></message>
        <sent-message v-on:messagesent="addMessage" :user="user_id"></sent-message>
    </div>
</template>

<script>
export default {
    name: "Conversation",
    props:['chat_id','user_id'],
    data(){
        return{
            title: null,
            messages: [],
            chatstatus:{
                tray: ''
            }
        }
    },
    mounted(){
        this.fetchMessages();
        Echo.private(`Chat.${this.chat_id}`)
            .listen('MessageSentEvent', (e) => {
                this.messages.push({
                    message: e.message.message,
                    user: e.user
                })
            })
    },
    methods: {
        addMessage(message) {
            this.messages.push(message)
            message.chat_id = this.chat_id;
            axios.put('/messages', message).then(response => {
                //console.log(response)
            })
        },
        fetchMessages() {
            axios.post('/messages',{chat_id: this.chat_id}).then(response => {
                this.messages = response.data.mensajes
                this.title = response.data.title
            })
        },
        close(){

        },
        tray(){
            if(this.chatstatus.tray===false){
                this.chatstatus.tray='chatbox--tray';
            }else{
                this.chatstatus.tray=false;
            }

        }
    }
}
</script>

<style scoped>

</style>
