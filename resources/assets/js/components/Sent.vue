<template>
    <form @submit.prevent.keyup="sent">
        <div class="input-group">
            <input v-model="message.message"
                   id="btn-input"
                   type="text"
                   class="form-control input-sm chat_set_height"
                   placeholder="Type your message here..."
                   tabindex="0"/>
            <span class="input-group-btn">
                    <button type="submit"
                            class="btn btn-dark"
                            id="btn-chat">
                        Enviar</button>
            </span>
        </div>
    </form>
</template>

<script>
export default {
    props:['user'],
    data() {
        return {
            message: {
                message: '',
                user: this.user
            }
        }
    },
    methods: {
        sent () {
            this.$emit('messagesent', this.message)
            this.message = {}
        }
    }
}
</script>
