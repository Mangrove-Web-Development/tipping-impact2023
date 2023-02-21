import $ from 'jquery'
const $doc = $(document)

function openShareWindow(event) {
  let link = $(event.currentTarget).attr('href')
  if (link.substr(0, 6) != 'mailto') {
    event.preventDefault()
    window.open(link, '', 'width=600, height=400')
  }
}

export default function initShareButtons(){
  $doc.on('click', '.js-share', openShareWindow )
}
