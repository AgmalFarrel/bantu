<html>
    <head>
        <title> SMP Darul Faqih </title>  
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>

    <body>
        
        <div id="app"> 
            
            @{{ message }}

                <script>
                    var vo = new Vue({
                        el: '#app',
                        data: {
                            message: "Hello Vue.js!"
                        }
                    })
                </script>

        </div>

        <example-component></example-component>    
    </body>
</html>