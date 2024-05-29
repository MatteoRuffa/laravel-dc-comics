import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


document.addEventListener('DOMContentLoaded', function() {
    var img = document.querySelector('.carousel-item img');

    var zoom = document.createElement('div');
    zoom.id = 'zoom';
    document.body.appendChild(zoom);

    img.addEventListener('mousemove', function(e) {
        var rect = e.target.getBoundingClientRect();
        var relX = e.clientX - rect.left;
        var relY = e.clientY - rect.top;

        var zoomX = relX / rect.width * 100;
        var zoomY = relY / rect.height * 100;

        zoom.style.backgroundImage = 'url(' + e.target.src + ')';
        zoom.style.backgroundPosition = zoomX + '% ' + zoomY + '%';
        zoom.style.left = e.pageX + 20 + 'px'; 
        zoom.style.top = e.pageY + 20 + 'px';  
    });

    img.addEventListener('mouseleave', function() {
        zoom.style.display = 'none';
    });

    img.addEventListener('mouseenter', function() {
        zoom.style.display = 'block';
    });
});



