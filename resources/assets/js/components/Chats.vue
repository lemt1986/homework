<template>
    <div class="chatcontainer">
       <conversation
           v-for="(chat, index) in conversations"
           :chat_id="chat.id"
           :user_id="user_id"
           :key="index"/>
    </div>
</template>

<script>
export default {
    name: "Chats",
    props:['user_id','chats'],
    data(){
        return{
            conversations: []
        }
    },
    mounted(){
        this.conversations = this.chats;
    },
}
</script>

<style scoped>

</style>
