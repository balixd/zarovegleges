
const postdata= async (url,configObj,renderFc)=>{
    const response=await fetch(url,configObj)
    const data=await response.json()
    renderFc(data);
}
const verifyuser= async (url,renderFc)=>{ 
    console.log(url)
    const response=await fetch(url)
    const data=await response.json()
    renderFc(data);
}
const logoutuser= async (url,renderFc)=>{
    const response=await fetch(url)
    const data=await response.json()
    renderFc(data);
}


