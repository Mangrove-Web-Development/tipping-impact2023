import $ from 'jquery'
import gsap from 'gsap'
import ScrollTrigger from 'gsap/ScrollTrigger'

// Simple Fade In animation
function animateSimple(elem) {
  gsap.to(elem, {
    duration: 0.5,
    y: 0,
    autoAlpha: 1,
    ease: "power1.out",
    stagger: 0.2,
    delay: 0.3,
    overwrite: 'auto'
  })
}

// Simple Fade In with more delay for first elem on the page (Hero)
function animateFirstElem(elem) {
  gsap.to(elem, {
    duration: 0.8,
    y: 0,
    autoAlpha: 1,
    ease: "power2.inOut",
    stagger: 0.5,
    delay: 0.8,
    overwrite: 'auto'
  })
}

// Set-ups for Animations
function setupFadeInElement(elem) {
  hide(elem) // assure that the element is hidden when scrolled into view
  const anim = gsap.to(elem, {duration: 1, autoAlpha: 1, y: 0, delay: 0.3, paused: true});
  ScrollTrigger.create({
    trigger: elem,
    end: "top 100px",
    once: true,
    onEnter: self => {
      // If it's scrolled past, set the state
      // If it's scrolled to, play it
      self.progress === 1 ? anim.progress(1) : anim.play()
    },
  });
}
function setupFadeInFirstElement(elem) {
  hide(elem) // assure that the element is hidden when scrolled into view
  ScrollTrigger.create({
    trigger: elem,
    onEnter: function() { animateSimple(elem) }
  })
}


function hide(elem) {
  gsap.set(elem, {autoAlpha: 0, y: 10})
}

function init(){
  gsap.registerPlugin(ScrollTrigger)
  gsap.utils.toArray(".js-fadeinHero").forEach( setupFadeInFirstElement )
  gsap.utils.toArray(".js-fadein").forEach( setupFadeInElement )
}

export default function initGreenSock(){
  $(document).ready( init )
  $(document).ready(function() {
    $(".text-circles__item").hover(
      function() {
        $(".text-circles__item").removeClass('is-active')
        $(this).addClass('is-active')
      },
      function() {
        $(this).removeClass('is-active')
      }
    );
  })
}
