 var $video = $("#click"), //jquery-wrapped video element
        mousedown = false;

    $video.click(function(){
        if (this.paused) {
            this.play();
            return false;
        }
        return true;
    });

    
