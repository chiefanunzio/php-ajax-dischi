<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- vue 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
          
    <main id='app'>

        <div>
            <ul v-for='cd in albums'>
                <li><h2>{{cd.title}}</h2></li> 
                <li><img :src="cd.poster" alt=""></li>
                <li>{{cd.author}}</li>
                <li>{{cd.genre}}</li>
                <li>{{cd.year}}</li>
            </ul>        
        </div>

    </main>

</body>

</html>

<!-- GOAL: Attraverso l'utilizzo di Axios: al caricamento
della pagina axios chiederà attraverso una
chiamata API i dischi a php e li stamperà
attraverso vue.
OPZIONALE
- Attraverso un'altra chiamata API, ﬁltrare gli
album per genere -->