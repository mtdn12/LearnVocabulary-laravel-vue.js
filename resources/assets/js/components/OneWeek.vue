<template>
    <div>
        <ul>
            <li v-for="word in words"><a :href="word.link" target="_blank">{{word.words}}</a></li>
        </ul>
    </div>
</template>

<script>
    import Bus from'../bus'
    export default {
        data(){
            return{
                words:[]
            }
        },
        methods:{           
        },
        mounted(){
            axios.get('/recover/oneweek').then((response)=>{
                this.words = response.data;
            })
        }

    }
</script>

<style scoped>
    li {
        list-style: none;
        box-sizing: border-box;
        margin: 10px 0 ;
        background-color: lightyellow;
    }
</style>