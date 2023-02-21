import Headroom from 'headroom.js'

export default function initHeadroom(){
  const theHeader = document.querySelector('.js-header')
  const headroom = new Headroom(theHeader, { offset: 0, tolerance: 5 })
  headroom.init()
}
