const slides = document.querySelectorAll('.glide')
for (let slide of slides) {
  const leftArrow = slide.parentElement.querySelector('.glide__arrow--left')
  const rightArrow = slide.parentElement.querySelector('.glide__arrow--right')

  const glide = new Glide(`#${slide.id}`, {
    type: slide.getAttribute('data-type'),
    focusAt: slide.getAttribute('data-focus_at'),
    perView: slide.getAttribute('data-per_view')
  })
  console.log(glide, `#${slide.id}`)
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
