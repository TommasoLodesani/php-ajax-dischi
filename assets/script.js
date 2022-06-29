new Vue ({
    el:'#app',
    data:{
        posts:[],
    },

    created(){
        axios.get('http://localhost/php-ajax-dischi/api.php')
        .then(response => this.posts = response.data)
    }
})