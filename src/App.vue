<template>
  <div>
    <h1 class="text-3xl">Vue app cats knoekels</h1>
    <div class="count">
      <p>{{ count }}</p>
    </div>
    <button @click="increment">Counter</button>
    {{ logo }}
    <img :src="`dist${logo}`" class="logo vue" alt="Vue logo" />
  </div>
</template>

<script>
import logo from "./assets/svg/vite.svg";

export default {
  data() {
    return {
      count: 0,
      logo,
    };
  },
  computed: {},
  methods: {
    increment() {
      this.count++;
    },
  },
};
</script>
