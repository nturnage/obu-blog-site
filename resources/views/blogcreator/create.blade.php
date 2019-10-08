@extends('layout.mainlayout')

@section('content')

    <div class="main-content" id="blogCreatorApp">
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
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="articleTitle">Email Address</label>
                    <input type="email" class="form-control" v-model="email" placeholder="Enter email address">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

<script src="/js/app.js"></script>
@endsection


@section('script')
<script>

var app = new Vue({
	'el': '#blogCreatorApp',
	'data': {
		'email': "",
		'userAdded': false,
		'failedToAddUser': false
	},
	methods: {
		onSubmit: function () {
			this.userAdded = false;
			this.failedToAddUser = false;

			axios.post('/blog-creator', this.$data)
				.then(function (response) {
					console.log("success");
					app.userAdded = true;
				})
				.catch(function (response) {
					console.log("failed");
					app.failedToAddUser = true;
				});
		},
		clearResponse: function() {
			this.userAdded = false;
			this.failedToAddUser = false;
		}
	}
})

</script>
@endsection
