window.addEventListener('DOMContentLoaded', event => {

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

function validate() {
    var nama = document.getElementById("name");
    var email = document.getElementById("email");
    var phone = document.getElementById("phone");
    var message = document.getElementById("message");

    if(nama.value == ""){
        alert("Please input your name.");
        nama.placeholder = "Input your name."
        nama.focus();
        return false;
    }
    if(!isNaN(nama.value)){
        alert("Name cannot be a number.");
        nama.placeholder = "Input your name."
        nama.focus();
        return false;
    }
    if(email.value == ""){
        alert("Please input your email.");
        email.placeholder = "Input your email."
        email.focus();
        return false;
    }
    if(phone.value == ""){
        alert("Please input your phone number.");
        phone.placeholder = "Input your phone number."
        phone.focus();
        return false;
    }
    if(phone.value < 10){
        alert("Valid phone number must be more than 10 digits.");
        phone.placeholder = "Input your phone number."
        phone.focus();
        return false;
    }
    if(message.value == ""){
        alert("Please input a message.");
        message.placeholder = "Input your message."
        message.focus();
        return false;
    }

}
