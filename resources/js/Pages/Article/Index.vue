<template>
	<div>
		<h2>Articles</h2>
		<br>
		<h2>
			<inertia-link href="articles/create" method="get" as="a" class="">create article</inertia-link>
		</h2>
		<div v-for="(article, index) in articles" :key="article.id">
			<p v-text="article.title"></p>
			<inertia-link :href="article.destroy_link" method="delete" as="button" type="button" class="btn btn-danger">delete article</inertia-link>
		</div>
	</div>
</template>
<script>
export default {
	props:["articles"],
	mounted() {
		console.log(this.articles);
	},
	methods:{

	}
}
</script>