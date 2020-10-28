<template>
	<div>
		<h2>Crear Articulo</h2>		
		<h2>
			<inertia-link href="/articles" method="get" as="a" class="">volver</inertia-link>
		</h2>
		<form @submit.prevent="submit" accept-charset="utf-8">
			<label>Title</label>
			<input v-model="form.title" type="text" class="form-control">
			<div v-if="$page.props.errors.title">{{ $page.props.errors.title[0] }}</div>
			<label>Body</label>
			<textarea v-model="form.body" class="form-control"></textarea>
			<div v-if="$page.props.errors.body">{{ $page.props.errors.body[0] }}</div>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>		
</template>
<script>
export default {
	data(){
		return {
			form:{
				title : "",
				body : ""
			}
		}
	},
	methods:{
		submit(){
			this.$inertia.post("/articles/store",this.form).then(() => {

			});
		}
	}
}
</script>