<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <textarea class="form-control" name="" id="" cols="30" rows="10">{{messages.join('\n')}}</textarea>
                <hr>
                <input type="text" class="form-control" v-model="textMessage" @keyup.enter="sendMessage">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                messages: [],
                textMessage: ''
            }
        },

        mounted() {

            window.Echo.channel('chat')
                .listen('Message', ({message})=>{
                    this.messages.push(message)
                });

        },

        methods: {

            sendMessage(){

                axios.post('/messages',{body: this.textMessage});

                this.message.push(this.textMessage);

                this.textMessage = '';
            }
        }
    }
</script>
