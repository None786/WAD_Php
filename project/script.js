var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
function newLocation(x) {
        window.location.href=x;
}

/*form validation
function myFunction() 
{
    const nameRegex = /[a-z|A-Z]+[^0-9]/
    const phoneRegex =/^[+92][0-9]{10,}/;
    const emailRegex =/[A-Z a-z 0-9 _ \-\.]+[@][a-z]+[\.][a-z]{2,3}/;
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    if (!nameRegex.test(name))
    {
        alert("Error! name is not found! or format is not accordingly");        
    }
    else if (!phoneRegex.test(phone))
    {
        alert("Error! phone no is not found! or format is not accordingly");
    }
    else if(!emailRegex.test(email))
    {
        alert("Error! email is not found! or format is not accordingly");
    }
    else
    {
        alert("Name, Phone Number and Email is found!");
    }
}*/