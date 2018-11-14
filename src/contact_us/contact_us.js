const header = document.querySelector('header')
const messenger = document.querySelector('.messenger')

let messengerTop = messenger.offsetTop

const changeHeaderColor = () => {
  const checkHeight = messengerTop - window.scrollY

  if (checkHeight <= 60) {
    header.classList.add('fixBgColor')
  } else {
    header.classList.remove('fixBgColor')
  }
}

window.addEventListener('scroll', changeHeaderColor)