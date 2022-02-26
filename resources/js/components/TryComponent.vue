<template>
  <div class="container">

    <p><img v-bind:src="picture" :alt="firstName + ' ' + lastName" /></p>
    <p>{{ firstName }} {{ lastName }}</p>
    <p>Email: {{ email }}</p>
    <p>
      Gender: <span :class="gender">{{ gender }}</span>
    </p>
    <button v-on:click="getRandomUser()" class="btn btn-primary m-3">button 1</button>
    <button class="btn btn-success m-3" :style="{background:buttonColor}">{{buttonText}}</button>
    <button class="btn btn-danger m-3">button 3</button>



		<myTest class="m-5" title2="some title 2"></myTest>

  </div>
</template>

<script>
import myTest from './MytestComponent.vue'

export default {
	components:{myTest},
	props:['buttonText','buttonColor'],
	name:"tryComponent",
	

	data() {
		return{
			firstName: 'Jane',
			lastName: 'Doe',
			email: 'something@something.com',
			gender: 'female',
			picture: 'https://randomuser.me/api/portraits/women/43.jpg'
		}
	},

	methods: {
		getUser(){
			this.firstName = 'Tamy',
			this.lastName =  'Smith',
			this.email = 'nothing@nothing.com',
			this.gender = 'male',
			this.picture = 'https://randomuser.me/api/portraits/women/32.jpg'
		},

		async getRandomUser(){
			const res = await fetch('https://randomuser.me/api')
			// const data = await res.json()
			// console.log(data);
			// const {info} = await res.json()
			// console.log(info.page);
			const {results} = await res.json()
			console.log(results[0]);
			

			// const res = await fetch('https://api.publicapis.org/entries')
			// const data = await res.json()
			// console.log(data);

			this.firstName = results[0].name.first,
			this.lastName =  results[0].name.last,
			this.email = results[0].email,
			this.gender = results[0].gender,
			this.picture = results[0].picture.large
		}
	},

	mounted() {
		console.log('Try Component loaded');
	}

}
</script>
