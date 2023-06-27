
function crearMapa(){
    let  Mapa = L.map('Mapa').setView([10.9164240,-84.07222],8);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(Mapa);
    var marker = L.marker([9.9187769, -84.1425951]).addTo(Mapa);
    marker.bindPopup("<b>Veterinaria La Huella!</b><br>Centro frente al BCR. <br>Teléfono 84918121 <img src='http://localhost/ProyectoR/assets/img/Local.jpg' class='imagenFoto card-img-top' ></img><br>").openPopup();
    var marker = L.marker([9.9214189,-84.1210871]).addTo(Mapa);
    marker.bindPopup("<b>Veterinaria La Huella!</b><br>La Aurora de Alajuelita Contiguo a la musmani<br>Teléfono 84918122 <img src='http://localhost/ProyectoR/assets/img/Local.jpg' class='imagenFoto card-img-top' ></img><br>").openPopup();
    }

document.querySelector("#ver").onclick=function(){
crearMapa();
}
