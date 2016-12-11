! function(t) {
    "use strict";
    t.fn.slider = function(i) {
        var n = t.extend(t.fn.slider.defaultOptions, i),
            e = function() {
				
                var i = t(this),
                    e = i.width();
					
                if (i.find(".image img").css("width", e + "px"), i.find(".left.image").css("width", Math.floor(e * n.initialPosition)), n.showInstruction) {
                    var s = null;
                    s = t("div.instruction"), 0 === s.length && (s = t("<div></div>").addClass("instruction").append("<p></p>"), i.append(s)), s.children("p").text(n.instructionText), s.css("left", 100 * (n.initialPosition - s.children("p").width() / (2 * e)) + "%")
                }
            },
            s = function(i) {
				
                i.preventDefault(), t(i.currentTarget).children(".instruction").hide();
                var n;
                n = i.type.startsWith("touch") ? i.originalEvent.touches[0].clientX - i.currentTarget.offsetLeft : void 0 === i.offsetX ? i.pageX - i.currentTarget.offsetLeft : i.offsetX;
				var maxwidth= $(".slider2").width();
				var halfdht = parseInt(maxwidth)/2;
				if(n < halfdht) {var nm=parseInt(maxwidth);}else{var nm=15;}
				t(this).find(".left.image").animate({width:nm}, 500, function() {});
				// .css("width", nm + "px")
            },
            o = function(i) {
                i.preventDefault(), t(this).css("cursor", "ew-resize").on("click.sliderns", s).on("click.sliderns", s)
            },
            r = function(i) {
                i.preventDefault(), t(this).css("cursor", "normal").off("click.sliderns").off("click.sliderns")
            },
            c = function() {
                return t(".slider.responsive").each(e)
            };
        return t(window).on("resize", c), this.each(e).on("click touchstart", s).on("mousedown touchstart", o).on("mouseup touchend", r)
    }, t.fn.slider.defaultOptions = {
        initialPosition: .5,
        showInstruction: !0,
        instructionText: "Click and Drag"
    }
}(jQuery);