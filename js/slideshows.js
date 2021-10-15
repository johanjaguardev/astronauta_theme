var slides = document.querySelectorAll('.glide')
for (let slide of slides) {
  const glideID = slide.id
  const glideType = slide.getAttribute('data-type')
  const glideFocusAt = slide.getAttribute('data-focus_at')
  const glidePerView = slide.getAttribute('data-per_view')
  console.log(glideID, glideType, glideFocusAt, glidePerView)
  const glide = new Glide(`#${glideID}`, {
    type: glideType,
    focusAt: glideFocusAt,
    perView: glidePerView
  })
  glide.mount()
}
// select.addEventListener('change', function (event) {
//   glide.update({
//     type: event.target.value
//   })
// })
