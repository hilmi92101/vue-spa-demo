<template>
    
    <div>
    	<div class="row">
    		<h1 class="mb-4">Animations</h1>
    	</div>

    	<div class="row mb-4">
			<div class="btn-group">
				<button class="btn btn-primary" v-on:click="turnOn">On</button>
    			<button class="btn btn-primary" v-on:click="turnOff">Off</button>
			</div>
    	</div>

    	<div class="row" v-if="!spinner">
    		<h1>Vue is awesome!</h1>
    	</div>
    	<vue-simple-spinner v-else></vue-simple-spinner>

    	
    </div>

</template>

<script>

	import Spinner from 'vue-simple-spinner';


    export default {
		mounted() {
			console.log('Component mounted.')
		},

		data: function () {
			return {
				spinner: true
			}
		},

		components: {
			'vue-simple-spinner': Spinner,
		},

		methods: {
			turnOn: function (event) {
				this.spinner = true;
			},

			turnOff: function (event) {
				this.spinner = false;
			},
		}
    }
</script>
