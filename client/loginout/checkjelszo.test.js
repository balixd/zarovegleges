const{ test, expect} = require('@jest/globals')
const checkhossz=require('./chechkjelszo')

test("Jelszó hossz ellenőrzése",()=>{
    let flag=checkhossz('123')
    expect(flag).toBe(true)
})
test("Jelszó hossz ellenőrzése",()=>{
    let flag=checkhossz('123456')
    expect(flag).toBe(false)
})