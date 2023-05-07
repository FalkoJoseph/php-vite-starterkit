<template>
  <div>
    <h1 class="text-3xl">PHP Vite Starterkit</h1>
    <div class="count">
      <p>
        {{ count }}
      </p>
    </div>
    <button class="p-2 text-white bg-gray-900" @click="increment">
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
