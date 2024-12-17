// JavaScript function to handle video click and replace with YouTube iframe
function handleVideoClick(event) {
    event.preventDefault(); // Prevent the default link behavior

    // Get the YouTube video ID from the data attribute
    const videoId = this.getAttribute('data-video-id');
    if (!videoId) return; // Safety check if data-video-id is missing

    // Create an iframe element to embed YouTube video
    const iframe = document.createElement('iframe');
    iframe.width = "640";
    iframe.height = "360";
    iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
    iframe.frameBorder = "0";
    iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
    iframe.allowFullscreen = true;

    // Replace the anchor tag with the iframe
    this.replaceWith(iframe);
}

// Wait for the DOM to be fully loaded before adding the event listener
document.addEventListener('DOMContentLoaded', function() {
    const videoLink = document.getElementById('video-link');
    if (videoLink) {
        videoLink.addEventListener('click', handleVideoClick);
    }
});
