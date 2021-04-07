<template>
  <span
    @click="periodClicked"
    class="cursor-pointer hover:bg-gray-50 hover:text-red-600 rounded bg-red-700 flex flex-col items-center justify-center h-24 w-32"
  >
    <i
      :class="`text-2xl hover:text-red-600 hover:text-4xl mdi mdi-${period.icon}`"
    ></i>
    <p class="text-sm tracking-widest my-2 hover:text-red-600 p-0 uppercase">
      <!-- {{ $f }} -->
      {{ period.name }}
    </p>
  </span>
</template>

<script>
export default {
  props: ["period"],
  methods:{
      periodClicked(){
          console.log('cl')
          this.$emit('periodClicked', this.period)
      }
  }
};
</script>

<style>
</style>