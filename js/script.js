const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: './server.php',
            albumsList : [],
            // isActive : false
        }
    },

    methods: {
        getAlbumList(){
            axios.get(this.apiUrl).then((response) =>{
                this.albumsList = response.data;

                console.log(response.data);
            });
        },
        // focusAlbum() {
        //     this.isActive = !this.isActive;
        //   }
    },

    created(){
        this.getAlbumList();
    }

}).mount('#app')