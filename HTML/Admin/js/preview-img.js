const photoFile = document.getElementById('inputGroupFile04')
let photoPreview = document.getElementById('preview-img')
let image;
let photoName;

// Select & Preview image

window.addEventListener('DOMContentLoaded', () =>{
    photoFile.addEventListener('change', () => {
        let file = photoFile.files.item(0)
        photoName = file.name;

        // ler um arquivo
        let reader = new FileReader()
        reader.readAsDataURL(file)
        reader.onload = function(event) {
            image = new Image();
            image.src = event.target.result
            image.onload = onLoadImage
        }
    })
})

// Selection tool

let startX, startY, relativeStartX, relativeStartY,
endX, endY, relativeEndX, relativeEndY;
let startSelection = false;

const events = {
   
    mousedown(){
        const {clientX, clientY, offsetX, offsetY} = event
        // console.table({
        //     'client': [clientX, clientY],
        //     'offset': [offsetX, offsetY]
        // })

        startX = clientX
        startY = clientY
        relativeStartX = offsetX
        relativeStartY = offsetY

        startSelection = true

    },
    mousemove(){
        endX = event.clientX
        endY = event.clientY

        if(startSelection) {
            selection.style.display = 'initial';
            selection.style.top = startY + 'px';
            selection.style.left = startX + 'px';

            selection.style.width = (endX - startX) + 'px';
            selection.style.height = (endY - startY) + 'px';
        }

    },
    mouseup(){
        startSelection = false;

        relativeEndX = event.layerX;
        relativeEndY = event.layerY;


    }
}

Object.keys(events)
.forEach(eventName => {
    // addEventListener('mouseover', events.mouseover)
    photoPreview.addEventListener(eventName, events[eventName])
})


// Canvas
let canvas = document.createElement('canvas')
let ctx = canvas.getContext('2d')

function onLoadImage() {
    const { width, height } = image
    canvas.width = width;
    canvas.height = height;

    // limpar o contexto
    ctx.clearRect(0, 0, width, height)

    // desenhar a imagem no contexto
    ctx.drawImage(image, 0, 0)

    photoPreview.src = canvas.toDataURL()


}