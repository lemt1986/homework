<template>
    <div class="chatbox__body" ref="msgContainer">

        <div class="chatbox__body__message" v-bind:class="'chatbox__body__message--'+[ checkSender(message.user) ? 'left': 'right']" v-for="message in messages">
            <strong v-if="!checkSender(message.user)">{{ message.user.name }}</strong>
            <div class="ul_section_full">
                <ul class="ul_msg">
                    <li>{{ message.message }}</li>
                </ul>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    props: ['messages','user_id'],
    mounted() {

    },
    watch: {
        messages: function() {
            this.$nextTick(function() {
                var container = this.$refs.msgContainer;
                container.scrollTop = container.scrollHeight + 120;
            });
        }
    },
    methods: {
        checkSender: function (user) {
            if(typeof user === 'object') // correct
            {
                return (user.id === this.user_id);
            }else{
                return true;
            }

        },

    }
}
</script>
<style scoped>
.panel{
    margin-bottom: 0;
}

</style>
