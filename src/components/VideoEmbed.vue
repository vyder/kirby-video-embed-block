<script setup>
import { computed } from 'vue'
const props = defineProps([
    'content'
])

const video = computed(() => props.content.video[0])

</script>

<template>
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
    <k-block-figure
        :is-empty="!video"
        empty-icon="file-video"
        empty-text="No video selected"
    />
</div>
</template>

<style>
.video-container > figure {
  display: flex;
  flex-direction: column;
  align-items: center;
  row-gap: 0.75rem;
}

.video-caption {
  color: #777777;
}

.video-caption-link {
  text-decoration: underline;
}
</style>