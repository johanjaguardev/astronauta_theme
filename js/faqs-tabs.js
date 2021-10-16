const faqsList = document.querySelectorAll('.faqs-tabs__li')
for (let li of faqsList) {
  li.onclick = function(e) {
    const tab = e.target.getAttribute('data-tab')
    console.log(tab)
    const listaContenido = document.querySelectorAll('.faqs-tabs__content')
    const titleList = document.querySelectorAll('.faqs-tabs__li')
    for (let content of listaContenido) {
      content.classList.remove('faqs-tabs__content-active')
    }
    for (let li of titleList) {
      li.classList.remove('faqs-tabs__li-active')
    }
    
    const contenidoActivo = document.querySelector(`.faqs-tabs__content-${tab}`)
    contenidoActivo.classList.add('faqs-tabs__content-active')
    this.classList.add('faqs-tabs__li-active')
    return false
  }
}
