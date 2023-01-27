<template>
  <div>
    <youtube :video-id="videoId" :player-vars="playerVars" @playing="playing"></youtube>
  </div>
</template>

<script>
export default {
  data() {
    return {
      videoId: 'lG0Ys-2d4MA',
      playerVars: {
        autoplay: 1
      }
    }
  },
  methods: {
    playing() {
      console.log('\o/ we are watching!!!')
    }
  }
}
</script>

<style lang="">
  
</style>