var slides = document.querySelectorAll('.glide')
for (let slide of slides) {
  const glideID = slide.id
  const glideType = slide.getAttribute('data-type')
  const glideFocusAt = slide.getAttribute('data-focus_at')
  const glidePerView = slide.getAttribute('data-per_view')
  
  const glide = new Glide(`#${glideID}`, {
    type: glideType,
    focusAt: glideFocusAt,
    perView: glidePerView
  })
  glide.mount()
  const leftArrow = slide.parentElement.querySelector('.glide__arrow--left')
  const rightArrow = slide.parentElement.querySelector('.glide__arrow--right')

  leftArrow.onclick = function() {
    glide.go('<')
    return false
  }

  rightArrow.onclick = function() {
    glide.go('>')
    return false
  }
}
// select.addEventListener('change', function (event) {
//   glide.update({
//     type: event.target.value
//   })
// })
