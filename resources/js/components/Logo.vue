<template>
    
    <div>
    	<h1 class="mb-4">Logo</h1>

		<div>
			<picture class="imgH d-flex flex-wrap justify-content-center align-self-center">
				<img src="/images/logo.svg" alt="">
			</picture>

			

			<div class="d-flex justify-content-between mb-3">
				<p>Original Logo on <strong>white</strong> background</p>

				<a class="btn btn-outline-primary" href="/images/logo.svg">logo.svg</a>

	  		</div>

			
		</div>
    </div>
    
</template>

<style scoped>
	

	.imgH {

		height: 320px;
		display: block;

	}
</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
