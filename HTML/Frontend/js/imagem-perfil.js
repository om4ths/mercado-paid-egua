const photoFile  = document.getElementById('file')

document.getElementsByClassName('img-add')
.onclick = function(){
    photoFile.click()
}

window.addEventListener('DOMContentLoaded', () =>{
    photoFile.addEventListener('change', ()=> {
        let file = photoFile.files.item(0)
        //ler arquivo
        let reader = new FileReader()
        reader.readAsDataURL(file)
        reader.onload = function(){
            let image = document.getElementById('photo-preview')
            image.src = event.target.result
        }

    })

})