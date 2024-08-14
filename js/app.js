//applicazione Vue
const { createApp } = Vue;

createApp({
    data(){
        return{
            title: 'TO DO LIST',
            apiURL: 'server.php',
            inputError: false,
            list: [], //array che corrisponde alla lista vuota da popolare attraverso la chiamata con axios
            todoItem: { //oggetto della lista da aggiungere al JSON quando l'utente digita nel form
                task: '',
                done: false,
                text: ''
            }
        }
        
    },
    methods:{

        //funzione per aggiungere un nuovo elemento nella lista
        addObj(){
            if(this.todoItem.task !== '' && this.todoItem.text !== ''){
                //creare una variabile con un nuovo oggetto da aggiungere che abbia come proprietà "task" e "done"
                const data = new URLSearchParams();
                data.append('task', this.todoItem.task);
                data.append('text', this.todoItem.text);

                
                //svuotare l'elemento inserito nel campo
                this.todoItem.task = '';
                this.todoItem.text = '';
                
                //invio della variabile attraverso axios con il metodo post
                axios.post(this.apiURL, data, {
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded'}
                })
                .then(response => {
                    this.list = response.data;

                })

                this.inputError = false;
                
            }else{
                this.inputError = true;
        }
            

        },

        //funzione per rimuovere gli oggetti inseriti
        removeObj(index){
            console.log(index)
            
            const data = new URLSearchParams();
            data.append('indexDelete', index);
            
            axios.post(this.apiURL, data, {
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            })
                .then(response => {
                    this.list = response.data;
                })

            
            
            
        },
        //cambiare il testo in barrato se la proprietà "done" corrisponde a "true"
        changeObj(index){
            console.log(index)

            const data = new URLSearchParams();
            data.append('taskDone', index);

            axios.post(this.apiURL, data, {
                headers: {'Content-Type' : 'application/x-www-form-urlencoded'}
            })
            .then(response => {
                this.list = response.data;
            })
        }
        
        
        

    },
    mounted(){
        axios.get(this.apiURL)
        .then(response => {
            this.list = response.data;
            console.log(this.list)
        })
        .catch(error => {
            console.error('There was an error!', error);
        });
        
    }
}).mount('#app')