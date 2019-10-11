<template>
	<div class="container">
            <h2>Add Blog Creator</h2>
			<div v-bind:class="['alert', {'alert-success': userAdded}, {'alert-danger': failedToAddUser}, 'collapse', {'show': userAdded | failedToAddUser}]" role="alert">
				<span v-if="userAdded">New blog creator added</span>
				<span v-else>There was an error adding user</span>
				<button type="button" class="close" @click="clearResponse">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
            <form method="POST" action="/blog-creator" @submit.prevent="onSubmit">
                <div class="form-group">
                    <label for="articleTitle">Email Address</label>
                    <input type="email" class="form-control" v-model="email" placeholder="Enter email address">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
</template>

<script>
export default{
	data() {
		return {
			'email': "",
			'userAdded': false,
			'failedToAddUser': false
		};
	},
	methods: {
		onSubmit: function () {
			this.userAdded = false;
			this.failedToAddUser = false;

			axios.post('/blog-creator', this.$data)
				.then((response) => {
					console.log("success");
					this.userAdded = true;
				})
				.catch((response) => {
					console.log("failed");
					this.failedToAddUser = true;
				});
		},
		clearResponse: function() {
			this.userAdded = false;
			this.failedToAddUser = false;
		}
	}
}
</script>
