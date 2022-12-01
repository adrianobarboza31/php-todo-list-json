const {createApp}= Vue 
createApp({
    data(){
        return{
            prova:'prova',
            todoList:[],
            apiUrl:'./server.php',
            text:''
        }
    },
    methods:{
   getTodo(){
        axios.get(this.apiUrl).then((response)=>{
            this.todoList=response.data
        })
   },
   addTodo(){
    const data={
        text:this.text,
    }
    axios.post(this.apiUrl,data,
        {
            headers:{'Content-Type':'multipart/form-data'}
        }).then((response)=>{
            console.log(response.data)
            this.getTodo();
        })
   }

},
mounted(){
    this.getTodo();
}
}).mount("#app");