<template>
  <div>
    <h1 class="text-3xl">PHP Vite Starterkit</h1>
    <div class="count">
      <p>{{ count }}</p>
    </div>
    <button class="bg-gray-900 p-2 text-white" @click="increment">
      Counter
    </button>
    {{ vite }}
    <img :src="`${vite}`" alt="Vite" />
  </div>
</template>

<script>
import vite from "./assets/svg/vite.svg";

export default {
  data() {
    return {
      count: 0,
      vite,
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
