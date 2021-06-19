const photoFile  = document.getElementById('photo-file')
let photoPreview = document.getElementById('photo-preview')
let image = new Image();


//selecionar e preview da img

document.getElementById('select-image')
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
            image.src = event.target.result
        }

    })

})

//selection tool
const selection = document.getElementById('selection-tool')
let startX, startY, relativeStartX, relativeStartY,
endX, endY, relativeEndX, relativeEndY
let startSelection = false;
const events = {
    mouseover (){
        this.style.cursor = 'crosshair'
    },
    mousedown (){
        const {clientX, clientY, offsetX, offsetY} = event
        startX = clientX
        startY = clientY
        relativeX = offsetX
        relativeY = offsetY

        startSelection = true

    },
    mousemove(){
        endX = event.clientX
        endY = event.clientY

        if (startSelection){
            selection.style.display = 'initial';
            selection.style.top = startY + 'px';
            selection.style.left = startX + 'px';
    
            selection.style.width = (endX - startX) + 'px';
            selection.style.height = (endY - startY) + 'px';
        }
    },
    mouseup(){
        startSelection = false

        relativeEndX = event.layerX;
        relativeEndY = event.layerY;

    }    
}

Object.keys(events)
.forEach(eventName => {
    photoPreview.addEventListener(eventName, events[eventName])
})

//canvas

let canvas = document.createElement('canvas')
let ctx = canvas.getContext('2d')

image.onload = function(){
    const { width, height } = image
    canvas.width = width;
    canvas.height = height;

    //limpar contexto(ctx)
    ctx.clearRect(0, 0, width, height)

    //desenhar a imagem no contextObject
    ctx.drawImage(image, 0, 0)

    photoPreview.src = canvas.toDataURL()

}