import VideoEmbed from './components/VideoEmbed.vue'

panel.plugin("vyder/kirby-video-embed-block", {
  blocks: {
    "video-embed": VideoEmbed
  }
})
