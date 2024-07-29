//applicazione Vue
const { createApp } = Vue;

createApp({
    data(){
        return{
            apiURL: 'server.php',
            list: [],
        }
        
    },
    methods:{

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