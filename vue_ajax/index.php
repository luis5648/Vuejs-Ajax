<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>titulazo papu</title>

    <style>
        table,td,th,tr{
            border: solid black 0.5px;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div id="wea" >
        <table>
            <tr>
                <th>Titulo</th>
                <th>Director</th>
                <th>Productor</th>
                <th>Descripción</th>
            </tr>
            
            <tr v-for="item in lista">
                <td>{{item.title}}</td>
                <td>{{item.director}}</td>
                <td>{{item.producer}}</td>
                <td>{{item.description}}</td>

            </tr>


        </table>

     <!--   <pre>{{$data}}</pre> -->
       
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.min.js"></script>

    <script type="text/javascript">

        var url_peliculas = 'https://ghibliapi.herokuapp.com/films/';

        new Vue({
            el: '#wea',

            created: function(){
                this.obtenerPeliculas();
            },

            data: {lista: []},

            methods: {
                obtenerPeliculas: function(){
                    this.$http.get(url_peliculas).then(function(response){
                        this.lista = response.data;
                    });
                }
            },
            
        });

        new Vue({
            el: '#div2',

            data: {
                mipixula: 'aaaaah!'
            }
        });
        
    </script>

</body>
</html>
