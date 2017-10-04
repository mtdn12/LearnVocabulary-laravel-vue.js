<template>
    <div>
        <label for="word">Word:</label>
        <textarea id="word" placeholder="Add new word" v-model="word.meaning"></textarea>
        <label for="link">Link:</label>
        <input type="text" placeholder="add link" v-model="word.link">
        <button @click="addWord">Add</button>
        <div id="preview">
            <p>{{word.meaning}}</p>
            <a v-bind:href="word.link">Link</a>
        </div>
    </div>
</template>

<script>
    import Bus from '../bus'
    export default {
        data(){
            return {
                word:{
                    meaning:'',
                    link:''
                },
                wordBackup:{}            
            }
        },
        methods:{
            makeTempWord(){
                let tempId = Date.now();
                return {
                    id:tempId,
                    words:this.word.meaning,
                    link:this.word.link
                }
            },
            addWord(){
                this.wordBackup = this.word;
                let TempWord = this.makeTempWord();                
                Bus.$emit('add-words',TempWord);
                axios.post('/words',{
                    words:this.word.meaning.trim(),
                    link:this.word.link.trim()
                }).catch(()=>{
                    this.word = this.wordBackup
                    Bus.$emit('remove-words',TempWord);
                })
                this.word.meaning='';
                this.word.link=''
            }
        },
    }
</script>

<style scoped>
    label {
        width: 100%;        
    }
    textarea,input {
        width: 100%;
    }
    button {
        margin-top: 10px;
        background-color: lightblue;
        border-radius: 5px;
        width: 100%;
    }
    #preview {
        margin: 15px 0 ;
        border-top: 1 px dotted gray;
        background-color: lightgray;
        color: blueviolet;
    }
</style>