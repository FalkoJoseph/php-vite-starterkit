import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";

// https://vitejs.dev/config/
export default defineConfig(({ command }) => {
  return {
    base: command === "build" ? "" : "",
    publicDir: "fake_dir_so_nothing_gets_copied",
    plugins: [vue()],
    build: {
      manifest: true,
      outDir: "./dist",
      rollupOptions: {
        input: "./src/main.js",
      },
    },
  };
});
