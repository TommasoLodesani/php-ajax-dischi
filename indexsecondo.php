<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div id="app">

    <div class="container" >
        <div v-for='disco in posts' class="disc">
            <img :src="disco.poster" alt="">
    
            <div class="info">
            <h4> {{disco.title}}</h4>
            <span> {{disco.author}} </span><br>
            <span> {{disco.year}} </span><br>
    
            </div>
    
        </div>


    </div>



    
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="assets/script.js"></script>

</body>
</html>