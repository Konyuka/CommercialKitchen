<script setup></script>

<template>
    <div>
        <div class="video-container">
            <video autoplay muted loop id="background-video">
                <source src="anim.mp4" type="video/mp4">
                Your browser does not support the loader animation
            </video>
        </div>
    </div>
</template>

<style scoped>
/* styles.css */
.video-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

#background-video {
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;
    min-height: 100%;
}

</style>