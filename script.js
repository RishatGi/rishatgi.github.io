// Add JavaScript logic for button clicks
document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.querySelectorAll('.mainNav1 a');

    buttons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            var page = this.getAttribute('href').split('=')[1];
            loadContent(page);
        });
    });
});

function loadContent(page) {
    var mainContent = document.querySelector('.main-content');
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            mainContent.innerHTML = xhr.responseText;
        }
    };

    xhr.open('GET', page + '.php', true);
    xhr.send();
}
