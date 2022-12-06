if (window.addEventListener) {
    var codigo = "";
    window.addEventListener("keydown", function (e) {
        codigo += String.fromCharCode(e.keyCode);
        console.log/(e.keyCode)
        if (e.keyCode == 13) {
            Buscar(codigo);
            codigo = "";
        }
    }, true);
}

function Buscar(codigo) {
    var request = new XMLHttpRequest(request);
      request.open("GET",`http://localhost/api/index2.php?codigo=${codigo}`, true);
    //   request.open("GET", "http://localhost/api/index2.php?codigo=" + Codigo, true);
      request.responseType = 'json';
      request.send();
      request.onload = () => {
        
        console.log(request.response.Status);
        console.log(request.response.Nombre);
        console.log(request.response.Precio);
        console.log(request.response.Imagen);
    
        if (request.response.Status == 200) {
            const LabelStatus = document.getElementById('LblStatus');
            const LabelName = document.getElementById('LblNombre');
            const LabelPrecio = document.getElementById('LblPrecio');
            const ImgProducto = document.getElementById('img');
            LabelName.textContent = "Nombre: " + request.response.Nombre;
            LabelPrecio.textContent = "Precio: $" + request.response.Precio;
            ImgProducto.src = './Img/Productos/' + request.response.Imagen;
        }
        if (request.response.Status == 300) {
            const LabelStatus = document.getElementById('LblStatus');
            const LabelName = document.getElementById('LblNombre');
            const LabelPrecio = document.getElementById('LblPrecio');
            const ImgProducto = document.getElementById('img');
            LabelName.textContent = "PRODUCTO NO EXISTENTE";
            LabelPrecio.textContent = "BUSQUE OTRO PRODUCTO";
            ImgProducto.src = './Img/Error.png';
        }
    };
}
