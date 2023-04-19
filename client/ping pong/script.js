import Ball from "./Ball.js"
import Paddle from "./Platform.js"

const ball = new Ball(document.getElementById("ball"))
const playerPaddle = new Paddle(document.getElementById("player-paddle"))
const computerPaddle = new Paddle(document.getElementById("computer-paddle"))
const playerscore = document.getElementById("player-score")
const computerscore = document.getElementById("computer-score")

let lastTime
function update(time) {
  if (lastTime != null) {
    const ido = time - lastTime
    ball.update(ido, [playerPaddle.platform(), computerPaddle.platform()])
    computerPaddle.update(ido, ball.y)

    if(vesztes()) ujra()
  
    
  }

  lastTime = time
  window.requestAnimationFrame(update)
} 

function vesztes(){
   const platform = ball.platform()
   return platform.right >= window.innerWidth || platform.left <= 0
}
function ujra(){
    const platform =ball.platform()
    if (platform.right >= window.innerWidth){
        playerscore.textContent = parseInt(playerscore.textContent) + 1
    } else {
        computerscore.textContent = parseInt(computerscore.textContent) + 1
    }
    ball.reset()
    computerPaddle.reset()
}

document.addEventListener("mousemove", e => {
    playerPaddle.position = (e.y / window.innerHeight) *100
})

window.requestAnimationFrame(update)