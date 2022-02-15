<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div v-for="postcard,i in postcards" :key="i" class="card">
                    <div class="card-header">Postcard sended by <b> {{ postcard.sender }} </b> from {{ postcard.address }} </div>

                    <div class="card-body">
                        <p>
                            {{ postcard.text}}
                        </p>
                        <p>
                            {{postcard.image}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {

            return{

                postcards: [],
            }
        },
        mounted() {
            
            axios.get('/api/postcards/index')
                 .then(r => this.postcards = r.data)
                 .catch(e => console.error('e', e));
        }
    }
</script>

<style lang="scss" scoped>
    .card {
        margin: 20px 0;
    }
</style>