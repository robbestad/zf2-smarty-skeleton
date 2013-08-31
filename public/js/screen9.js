var VideoController = (function () {
    function VideoController(auth, searchString, constraint, numberOfVids) {
        this.auth = auth;
        this.searchString = searchString;
        this.constraint = constraint;
        this.numberOfVids = numberOfVids;
    }
    return VideoController;
})();
function getVideo(data) {
    ps.listMedia({
        fields: [
            "mediaid", 
            "title", 
            "description"
        ],
        count: [
            data.numberOfVids
        ]
    }, function (data) {
        callback(data);
    });
}
function presentTopVideos(data) {
    ps.listMedia({
        fields: [
            "mediaid", 
            "title", 
            "description", 
            "image", 
            "thumbnail", 
            "categoryname"
        ],
        count: [
            data.numberOfVids
        ]
    }, function (data) {
        if(data.count == 0) {
            alert("No videos found");
            return false;
        }
        for(var i = 0; i < data.media.length; i++) {
            document.getElementById("top-video-title-" + i + "").innerHTML = data.media[i].title;
            document.getElementById("top-video-description-" + i + "").innerHTML = data.media[i].description;
            var picture1 = (document.getElementById("top-video-image-" + i + ""));
            picture1.src = data.media[i].image;
            var link1 = "/video/" + data.media[i].categoryname + "/" + data.media[i].title + "/" + data.media[i].mediaid;
            var href1 = (document.getElementById("top-video-href-" + i + ""));
            href1.setAttribute("href", link1);
        }
        callback(data);
    });
}
function searchVideo(data) {
    ps.search(data.searchString, {
        "count": data.numberOfVids,
        "fields": [
            "thumbnail", 
            "title", 
            "mediaid", 
            "width", 
            "height", 
            "categoryname"
        ],
        "constraints": [
            data.constraint
        ],
        "order": "posted"
    }, function (data) {
        if(data.count == 0) {
            document.getElementById("search-result").innerHTML = "<p>No results</p>";
            return false;
        }
        var media, i;
        $('#search-result').prepend("<div class='videos'>");
        for(i = 0; i < data.media.length; i++) {
            media = data.media[i];
            $('#search-result').append("<div class='video-block'> \
                    <div class='block-content'> \
                        <div class='block-height'>  \
                            <div class='thumb'> \
                            <a href=\"/video/" + media.categoryname + "/" + media.title + "/" + media.mediaid + "\"> <img src='" + media.thumbnail + "'></a> \
                            </div>  \
                            <div class='description'> \
                                <div class='title'>" + media.title + "</div> \
                                <div class='content'>Se Video</div> \
                                <div class='bottom'>49 minutter</div> \
                            </div> \
                        </div> \
                    </div> \
                </div>");
        }
        $('#search-result').append("<div class='videos'>");
    });
}
function callback(data) {
}
function fetchVideos() {
    var videos = new VideoController(picsearch_ajax_auth, "", "description", 1);
    this.getVideo(videos);
}
function searchVideos(searchString) {
    var videos = new VideoController(picsearch_ajax_auth, searchString, "description", 10);
    this.searchVideo(videos);
}
function fetchTopVideos(searchString) {
    var videos = new VideoController(picsearch_ajax_auth, searchString, "description", 10);
    this.presentTopVideos(videos);
}
function searchVideoById(searchString) {
    ps.getMediaDetails(searchString, {
        "fields": [
            "mediaid", 
            "width", 
            "height", 
            "title", 
            "description"
        ]
    }, function (media) {
        document.getElementById("video-title").innerHTML = media.title;
        document.getElementById("video-description").innerHTML = media.description;
        document.getElementById("search-result").innerHTML += "<div id='player'></div>";
        ps.embed({
            "containerId": "player",
            "width": 988,
            "height": 556,
            "mediaid": media.mediaid,
            "autoplay": true,
            "loop": false
        });
    });
}
$(document).ready(function () {
    $('.controller-right').click(function () {
        var right = parseInt($(".top-content").css("right"), 10);
        var maxWidth = -($(window).width());
        $("[class^=video-block]").each(function () {
            maxWidth += $(this).width();
        });
        if((right + 400) < maxWidth) {
            var moveX = (right + 400);
        } else {
            var moveX = maxWidth;
            $(".right").css("display", "none");
        }
        $(".top-content").animate({
            "right": moveX + "px"
        }, {
            duration: 500,
            complete: function () {
            }
        });
        $(".left").css("display", "block");
    });
    $('.controller-left').click(function () {
        var right = parseInt($(".top-content").css("right"), 10);
        if((right - 500) > 0) {
            var moveX = (right - 500);
        } else {
            var moveX = 0;
        }
        $(".top-content").animate({
            "right": moveX + "px"
        }, {
            duration: 500,
            complete: function () {
            }
        });
        if((right - 500) <= 0) {
            $(".left").css("display", "none");
        }
        $(".right").css("display", "block");
    });
    $('.hide-videos').click(function () {
        $('.toplist-iframe').toggle('fast', function () {
            if($('.toplist-iframe').css('display') == 'none') {
                $(".hide-videos").text("Vis videoer ");
            } else {
                $(".hide-videos").text("Skjul videoer");
            }
            $("html, body").animate({
                scrollTop: 0
            }, "fast");
        });
    });
});

