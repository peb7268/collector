window.BV;
$('document').ready(function($){
    // initialize BigVideo
    BV = new $.BigVideo();
    BV.init();
    BV.show('media/hangouts.mp4',{ambient:true});

    // Playlist button click starts video
    $('.playlist-btn').on('click', function(e) {
        e.preventDefault();
        BV.show($(this).attr('href'));
    })

    // Video Play/Pause toggle
    $('#video-toggle').on('click', function(e) {
        if (this.checked)   BV.getPlayer().play();
        else                BV.getPlayer().pause();
    })

    // set up navigation
    $('.nav-link').on('click',function(e){
        e.preventDefault();
        scrollToSection($(this).attr('href'));
    })

    function scrollToSection(id) {
        $('body,html').animate({scrollTop: $(id).offset().top - 50}, 400);
    }
});
