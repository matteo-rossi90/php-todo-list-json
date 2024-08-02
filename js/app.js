//applicazione Vue
const { createApp } = Vue;

createApp({
    data(){
        return{
            title: 'TO DO LIST',
            apiURL: 'server.php',
            list: [], //array che corrisponde alla lista vuota da popolare attraverso la chiamata con axios
            todoItem: { //oggetto della lista da aggiungere al JSON quando l'utente digita nel form
                task: '',
                done: false
            }
        }
        
    },
    methods:{

        //funzione per aggiungere un nuovo elemento nella lista
        addObj(){
            
            //creare una variabile con un nuovo oggetto da aggiungere che abbia come proprietà "task" e "done"
            const data = new URLSearchParams();
            data.append('task', this.todoItem.task);
            data.append('done', this.todoItem.done);
            
            //svuotare l'elemento inserito nel campo
            this.todoItem.task = '';
            
            //invio della variabile attraverso axios con il metodo post
            axios.post(this.apiURL, data, {
                headers: { 'Content-Type': 'application/x-www-form-urlencoded'}
            })
            .then(response => {
                this.list = response.data;

            })
            
            

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