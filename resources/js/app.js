import './bootstrap'
import 'keen-slider/keen-slider.css'
import KeenSlider from 'keen-slider'
//ken

let timestamp = 0
var slider2 = new KeenSlider('#my-keen-slider-2')

var slider = new KeenSlider('#my-keen-slider')
var slidePorto = new KeenSlider('#slider_portfolio')

function AutoSlide (autoSlide = true) {
    clearInterval(timestamp)
    timestamp = setInterval(() => {
        slider.next()
    }, 4000)
}

const next = document.querySelectorAll(`.slider_control`)
next.forEach(function (es) {
    es.onclick = function (e) {
        if (es.getAttribute('data-button') == 'prev') {
            slider2.prev()
        } else {
            slider2.next()
        }
    }
})

slider2.on('slideChanged', function (e) {
    const dot = document.querySelectorAll('.dot_slider_paket')
    const currentSlide = slider2.track.details.rel
    dot.forEach(function (e, p) {
        if (currentSlide == e.getAttribute('data-dot')) {
            e.style.background = 'red'
        } else {
            e.style.background = 'grey'
        }
    })
})

slider.next()
AutoSlide(true)
