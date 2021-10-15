const slides = document.querySelectorAll('.glide')
for (let slide of slides) {
  const leftArrow = slide.parentElement.querySelector('.glide__arrow--left')
  const rightArrow = slide.parentElement.querySelector('.glide__arrow--right')
  const glide = new Glide(`#${slide.id}`, {
    type: slide.getAttribute('data-type'),
    focusAt: slide.getAttribute('data-focus_at'),
    perView: slide.getAttribute('data-per_view')
  })
  glide.mount()

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
