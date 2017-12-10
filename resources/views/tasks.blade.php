<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tasks Laravel</title>


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <h1>Barcelona Lineup</h1>

            <div class="content" id="content">
               <ul>
               <li v-for="name in names" v-text="name"></li>
            	</ul>
                <input id="input" type="text" v-model="createName">
                <button @click="addName">Add </button>
            </div>
        </div>
        
        <script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>
        
        <script >
        var app= new Vue({
			el:'#content',
        	data: {
				createName:'',
				names: ['messi', 'suarez', 'pique', 'roberto']},
			methods: {
				addName: function(){ 
				this.names.push(this.createName);
				this.createName='';
				}
			},
		});
        
        </script>
    </body>
</html>
