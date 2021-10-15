var slides = document.querySelectorAll('.glide')
for (let slide of slides) {
  console.log(slide, slide.id)
  const glide = new Glide(`#${slide.id}`, {
    type: 'carousel',
    focusAt: 'center',
    perView: 3
  })
  glide.mount()
}
// select.addEventListener('change', function (event) {
//   glide.update({
//     type: event.target.value
//   })
// })
