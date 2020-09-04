<template>
    <form @submit.prevent.keyup="newChat">
        <div class="input-group">
            <span class="input-group-btn">
                    <button type="submit"
                            class="btn btn-primary"
                            id="btn-chat">
                        <slot></slot></button>
            </span>
        </div>
    </form>
</template>

<script>
export default {
    props:['user_id'],
    data() {
        return {
            chat: {
                user: this.user_id
            }
        }
    },
    methods: {
        newChat () {
            this.$emit('newchat', this.chat)
            this.chat = {}
        }
    }
}
</script>

<style scoped>

</style>
