/* script.js */
// Открытие и закрытие всплывающего окна
document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('#openButton')) {
        document.querySelector('#openButton').addEventListener('click', function() {
            document.querySelector('#popupContainer').style.display = 'block';
        });
    }

    if (document.querySelector('#closeButton')) {
        document.querySelector('#closeButton').addEventListener('click', function() {
            document.querySelector('#popupContainer').style.display = 'none';
        });
    }
});

document.addEventListener('click', function(event) {
    var popup = document.querySelector('#popupContainer');
    var openButton = document.querySelector('#openButton');

    if (popup) {
        // Если клик был совершен не по всплывающему окну и не по кнопке открытия,
        // то скрываем окно
        if (event.target !== popup && event.target !== openButton && event.target !== popupContent) {
            popup.style.display = 'none';
        }
    }
});
