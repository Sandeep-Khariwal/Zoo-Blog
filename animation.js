var mg1 = document.getElementById('mg1')
var mg2 = document.getElementById('mg2')
var mg3 = document.getElementById('mg3')
var mg4 = document.getElementById('mg4')
var mg5 = document.getElementById('mg5')
var right = document.getElementById('right')
var left = document.getElementById('left')

document.querySelector('#right').addEventListener("click",() => {
    mg1.style.animation =  "slide1 1s forwards ease-in-out"; 
    mg2.style.animation =  "slide2 1s forwards ease-in-out"; 
    
})

// document.querySelector('#right').addEventListener("click",() => {
//     mg2.style.animation =  "slide12 1s forwards ease-in-out"; 
//     mg3.style.animation =  "slide3 1s forwards ease-in-out"; 
    
// })
document.querySelector('#left').addEventListener("click",() => {
    mg1.style.animation =  "slide11 1s forwards ease-in-out"; 
    mg2.style.animation =  "slide24 1s forwards ease-in-out"; 
    
})