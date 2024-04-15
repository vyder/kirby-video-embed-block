// import VideoEmbed from './components/VideoEmbed.vue'

panel.plugin("vyder/kirby-video-embed-block", {
  blocks: {
    "video-embed": {
        computed: {
          video() {
            return this.content.video && this.content.video[0]
          }
        },
        template: `
          <div class="video-container" v-if="video">
              <figure>
                  <video
                      :controls="content.controls"
                      :autoplay="content.autoplay"
                      :loop="content.loop"
                      :alt="content.alt">
                      <source :src="video.url" type="video/mp4">
                      Your browser does not support the video tag.
                  </video>

                  <figcaption class="video-caption" v-if="content.caption">
                      <a v-if="content.link" class="video-caption-link" :href="content.link" :alt="content.alt">
                          {{ content.caption }}
                      </a>
                      <p v-else>{{ content.caption }}</p>
                  </figcaption>
              </figure>
          </div>
          <div v-else>
              Please select a video
          </div>
        `
    }
  },
});
