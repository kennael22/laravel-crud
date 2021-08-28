<!DOCTYPE html>
<html>
<head>
	<title>Vue</title>
	<!-- development version, includes helpful console warnings -->

    <link rel="stylesheet" type="text/css" href="/css/classic.css">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
<div id="app">

	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
	<input  class="form-control form-control-lg" type="text" v-on:input="onchange">
	
	<label>{{ title }}</label>
	</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	new Vue({
		el:"#app",
		data:{
			title:"hello world"
		},
		methods:{
			onchange:function(e){
				this.title=e.target.value;
				if(this.title==''){
					this.title="hello world";
				}
			}
		}
	});
	calc();
	function calc(){
		const starttime=new Date();
		// dosomething();
		const endtime=new Date();
		let diff=endtime - starttime;
		let sec=diff/1000;
		console.log("seconds "+ sec);
	}
</script>
</body>

</html>