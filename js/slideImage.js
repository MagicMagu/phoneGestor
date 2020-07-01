(function(){
  let next = 0
  let back = 3
  $('#sl-2').hide()
  $('#sl-3').hide()
  $('#back').on('click', () => {
    if (back > 0) {
      back--
    }else{
      back = 2
    }

    let arr = $('.slide').children('.slide-item');
    for (let i = 0; i < 3; i++) {
      $(arr[i]).hide()
      $(arr[back]).show()
    }
  })
  $('#next').on('click', () => {
    if (next < 2) {
      next++
    }else{
      next = 0
    }

    let arr = $('.slide').children('.slide-item');
    for (let i = 0; i < 3; i++) {
      $(arr[i]).hide()
      $(arr[next]).show()
    }
  })
}())