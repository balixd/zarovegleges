const speed = .02

export default class paddle {
    constructor(paddleElem){
        this.paddleElem = paddleElem
        this.reset()
    }

    get position(){
        return parseFloat(getComputedStyle(this.paddleElem).getPropertyValue("--position"))
    }

    set position(value){
        this.paddleElem.style.setProperty("--position",value)
    }
    platform() {
        return this.paddleElem.getBoundingClientRect()
    }

    reset(){
        this.position = 50
    }

    update(ido, ballHeight){
        this.position += speed * ido * (ballHeight - this.position)
    }

}