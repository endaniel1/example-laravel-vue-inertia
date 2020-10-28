<template>
	<div>
		<h2>
			<inertia-link href="home" method="get" as="a">Home</inertia-link> / 
			<inertia-link href="articles" method="get" as="a">Articles</inertia-link>
		</h2>

		<h2>Bienvenido Usuario: {{$page.props.auth.user.name}} </h2>
	</div>
</template>
<script>
export default {
	mounted() {
	},
	methods:{

	}
}
</script>