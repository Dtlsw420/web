var header = document.getElementById("Header")

window.addEventListener('scroll',()=>{
    var scroll=window.scrollY
    if(scroll>10 ){
        header.style.display = 'none'
        
        header.style.backgroundColor='transparent'

    }else{{
        header.style.backgroundColor='#333'
        header.style.display ='flex'
    }}
}
)

