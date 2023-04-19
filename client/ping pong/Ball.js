const kezdogyors = .025
const mozgasgyorsulas = 0.00001
export default class Ball {
    constructor(ballElem) {
      this.ballElem = ballElem
      this.reset()
    }
    get x() {
        return parseFloat(getComputedStyle(this.ballElem).getPropertyValue("--x"))
    }
    set x(value) {
        this.ballElem.style.setProperty("--x",value)
    }
    get y() {
        return parseFloat(getComputedStyle(this.ballElem).getPropertyValue("--y"))
    }
    set y(value) {
        this.ballElem.style.setProperty("--y",value)
    }
    platform() {
        return this.ballElem.getBoundingClientRect()
    }

    reset(){
        this.x = 50
        this.y = 50
        this.direction = { x:0 }
        while (Math.abs(this.direction.x) <= 0.2 || Math.abs(this.direction.x) >= 0.9){
            const irany = randomszam(0, 2 * Math.PI)
            this.direction = { x: Math.cos(irany), y: Math.sin(irany) }
        }
       this.mozgas = kezdogyors
    }

update(ido, paddlerects){
    this.x += this.direction.x * this.mozgas * ido
    this.y += this.direction.y * this.mozgas * ido
    this.mozgas += mozgasgyorsulas * ido
    const platform = this.platform()

    if(platform.bottom >= window.innerHeight || platform.top <= 0){
        this.direction.y *= -1
    }
    if(paddlerects.some(r => hozzaer(r,platform))){
      this.direction.x *= -1
  }
}
}
function randomszam(min, max){
    return Math.random() * (max - min) + min
}
function hozzaer(platform1, platform2){
return platform1.left <= platform2.right && platform1.right >= platform2.left && platform1.top <= platform2.bottom && platform1.bottom >= platform2.top
}
