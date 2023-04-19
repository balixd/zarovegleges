function checkhossz(str){
   // console.log(obj.value.length)
    if(str.length<6){
   errors=true 
 //  document.querySelector('.register').disabled=true
 //   document.querySelector('.msg').innerHTML='A jelszó túl rövid, minimum 6 karakter kell ,hogy legyen.'
    
  }else{

    errors=false
//document.querySelector('.register').disabled=false
 // document.querySelector('.msg').innertHTML=''
  
}
return errors
  }
  module.exports=checkhossz