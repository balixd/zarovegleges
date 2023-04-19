let irany ={x: 0, y: 0};
let speed= 10;
let elozoido =0;
let snakeArray = [{x: 6, y: 15}]
let food = {x: 14, y: 7}
let score = 0;

function main(ido){
window.requestAnimationFrame(main);
//console.log(ido)
if((ido - elozoido) / 1000<1/speed){
    return;
}
elozoido = ido
jatek();
}
function jatekvege(snake){
  //  return false;

    //ha magadnak mesz
    for(let i = 1; i<snakeArray.length;i++){
        if(snake[i].x== snake[0].x && snake[i].y == snake[0].y){
            return true;
        }
    }
    // ha falnak mesz
    if(snake[0].x >= 18 || snake[0].x <= 0 ||snake[0].y >= 18 ||snake[0].y <=0){
        return true;
    }
}
const sendscore= async (url,renderFc)=>{ 
    console.log(url)
    const response=await fetch(url)
    const data=await response.json()
    renderFc(data);
}

function jatek(){
    //update
    console.log(snakeArray)
    if(jatekvege(snakeArray)){
      console.log('jatek vege!!!',score)
      sendscore('../../server/score.php?score='+score,RenderMsg)

    }
    function RenderMsg(data){
        console.log('Data:',data)
        irany = {x: 0, y:0};
        alert(`Játék vége. Nyomj meg egy gombot ,hogy újra kezdd!,${data.msg}`);
        snakeArray = [{x:13,y:15}];
        score = 0;
    }

    //kaja utan score novekedes, kaja ujrarakas, scorebox
    if(snakeArray[0].y == food.y && snakeArray[0].x == food.x){
        snakeArray.unshift({x: snakeArray[0].x + irany.x, y: snakeArray[0].y + irany.y})
    let a =2;
    let b=16;
    food = {x: Math.round(a + (b-a) * Math.random()),y: Math.round(a + (b-a) * Math.random())};
        score +=1;
        scorebox.innerHTML = "Pontjaid: " + score;
}

    //kigyo mozgatasa
    for(let i = snakeArray.length -2;i >= 0; i--){
        snakeArray[i+1]={...snakeArray[i]}
    }
    snakeArray[0].x += irany.x;
    snakeArray[0].y += irany.y;

    //kigyo
    background.innerHTML ="";
    snakeArray.forEach((e, index)=> {
        snakeElement = document.createElement('div');
        snakeElement.style.gridRowStart = e.y;
        snakeElement.style.gridColumnStart = e.x;
        snakeElement.classList.add('snake')
        background.appendChild(snakeElement);

       
        if(index ==0){ 
            snakeElement.classList.add('head');
        }else{
            snakeElement.classList.add('snake');
        }
    });

    //kaja
    foodElement = document.createElement('div');
    foodElement.style.gridRowStart = food.y;
    foodElement.style.gridColumnStart = food.x;
    foodElement.classList.add('food');
    background.appendChild(foodElement);

}
window.requestAnimationFrame(main);

//iranyitas
window.addEventListener('keydown', (e)=> {
    irany = {x: 0, y: 1} //indul
    switch(e.key){
        case "ArrowUp":
        //    console.log('ArrowUp')
        irany.x=0;
        irany.y=-1;
            break;
        case "ArrowDown":
            //console.log('ArrowDown')
            irany.x=0;
            irany.y=1;
            break;
        case "ArrowLeft":
            //console.log('ArrowLeft')
            irany.x=-1;
            irany.y=0;
            break;
        case "ArrowRight":
            //console.log("ArrowRight")
            irany.x=1;
            irany.y=0;
            break;
        default: 
        irany ={x:0, y:0}
        console.log('Más billentyű')
            return
    }
})