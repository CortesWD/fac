"use strict";jQuery(document).ready(function(e){var t=jQuery("header.container-fluid");jQuery(".btn-toggle").click(function(e){e.preventDefault(),jQuery(window).width()>768&&jQuery("section.container-fluid").toggleClass("push-menu"),jQuery(".menu-container").toggleClass("active")});var i=void 0;jQuery(window).width()>768&&(i=100),i=20,t.affix({offset:{top:i}});var n={infinite:!0,slidesToShow:1,slidesToScroll:1,dots:!0,arrows:!1};jQuery("#slider-home").slick(n),jQuery("#slider-videos").slick(n),jQuery(".lista-iconos a.btn-more").click(function(e){e.preventDefault(),jQuery(".lista-iconos .lista-horizontal").toggleClass("active")}),jQuery(document).on("click",".vjs-big-play-button",function(){jQuery(this).parent().parent().parent().parent().find(".item-text").fadeOut()}),jQuery("#slider-videos").on("afterChange",function(e,t,i,n){jQuery(".video-js").each(function(){videojs(this.id).ready(function(){this.pause()})})}),jQuery(window).width()<768&&(jQuery(".noticia-container .overlay").each(function(e,t){jQuery(this).find(".btn-more").detach().prependTo(this)}),jQuery(".destacado .destacado-content").each(function(e,t){jQuery(this).find(".destacado-fecha").detach().prependTo(this)}))});