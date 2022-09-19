$(document).ready(function () {
    console.log('alive');
    lightGallery(document.getElementById('lightgallery'), {
        plugins   : [
           // lgZoom,
            //lgThumbnail
        ],
        licenseKey: '1234',
        speed     : 500, // ... other settings
    });
});