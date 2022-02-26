<template>
  <div>
    <button
      type="button"
      class="btn btn-primary btn-sm"
      @click="followUser"
      v-text="buttonText"
    ></button>
  </div>
</template>

<script>
export default {
  props: ["userId", "follows"],

  mounted() {
    console.log("Component mounted.");
    console.log(this.follows);
    console.log(this.userId);
  },

  data() {
    return {
      following: this.follows,
    };
  },

  // data: function(){
  // 	return $status = 'Hello this is GeeksforGeeks.';
  // },

  methods: {
    followUser() {
      axios
        .post("/follow/" + this.userId)
        .then((response) => {
          this.following = !this.following;
          console.log(response.data);
        })
        .catch((errors) => {
          if (errors.response.status == 401) {
            window.location = "/login";
          }
        });
    },
  },

  computed: {
    buttonText() {
      // if (this.following){
      // 	return 'Un-follow';
      // } else {
      // 	return 'Follow';
      // }
      return this.following ? "Un-follow" : "Follow";
    },
  },
};
</script>
