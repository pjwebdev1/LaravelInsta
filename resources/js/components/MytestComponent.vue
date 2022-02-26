<template>
  <div class="container">
    <h1>mytest componenet</h1>
    <h2>{{ title }}</h2>
    <h2>{{ title2 }}</h2>
		
  </div>
</template>

<script>
export default {
  name: "myTest",
  props: ["title", "title2"],

  data() {
    return {};
  },

  methods: {},

  mounted() {
    console.log("Mytest Component loaded");
  },
};
</script>
