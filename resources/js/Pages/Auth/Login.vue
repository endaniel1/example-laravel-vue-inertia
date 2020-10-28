<template>
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Login</div>

	                <div class="card-body">
	                    <form @submit.prevent="submit">

	                        <div class="form-group row">
	                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

	                            <div class="col-md-6">
	                                <input v-model="form.email" id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

	                            <div class="col-md-6">
	                                <input v-model="form.password" id="password" type="password" class="form-control " name="password" required autocomplete="current-password">
	                            </div>
	                        </div>

	                        <div class="form-group row mb-0">
	                            <div class="col-md-8 offset-md-4">
	                                <button type="submit" class="btn btn-primary">
	                                    Login
	                                </button>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</template>

<script>
export default {
	data(){
		return {
			form:{
				email : "enriq_1997@hotmail.com",
				password : "123456"
			}
		}
	},
	methods:{
		submit(){
			this.$inertia.post("/login", this.form)
			.then(() => {
				console.log("hOLA");
			});
		}
	}
}
</script>