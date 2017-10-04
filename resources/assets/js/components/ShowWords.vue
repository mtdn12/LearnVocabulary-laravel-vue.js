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
            removeWords(id){
                this.words = this.words.filter((word)=>{
                    return word.id != id;
                })
            }
        },
        mounted(){
            axios.get('/words/newwords').then((response)=>{
                this.words = response.data;
            })

            Bus.$on('add-words',(word)=>{
                this.words.unshift(word);                
            });

            Bus.$on('remove-words',(word)=>{
                this.removeWords(word.id);
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
    a {
        color: red;
        font-size: 20px;
    }
</style>