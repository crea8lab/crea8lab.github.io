const header = document.querySelector('header')
const messenger = document.querySelector('.messenger')

let messengerTop = messenger.offsetTop
let headerHeight = header.offsetHeight

console.log(headerHeight, messengerTop)

const changeHeaderColor = () => {
  if (messengerTop <= headerHeight) {
    console.log('reached limit...')
  }
}

window.addEventListener('scroll', changeHeaderColor)