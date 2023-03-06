import $ from 'jquery'
import magnificPopup from 'magnific-popup'
const  $doc = $(document)

function playVideo(event) {
  const videoSrc = $(event.currentTarget).data('url');
  event.preventDefault();
  console.log(videoSrc);

  $.magnificPopup.open({
    items: {
      src: videoSrc,
      type: 'iframe',
    },
    midClick: true,
    closeBtnInside: true,
    removalDelay: 100,
    mainClass: 'popup--animate',
    iframe: {
      markup: '<div class="mfp-video-header">' +
        '<div class="mfp-close"></div>' +
        '</div>' +
        '<div class="mfp-iframe-scaler">' +
        '<iframe class="mfp-iframe" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen ></iframe>' +
        '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button
      patterns: {
        youtube: {
          index: 'youtube.com',
          id: 'v=',
          src: '//www.youtube.com/embed/%id%&rel=0&amp;autoplay=1&mute=1'
        }
      }
    }
  });
}

export default function initVideoPlay(){
  $doc.on('click', '.js-video-play', playVideo );
}
