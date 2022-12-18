<script>

const sideMenu = document.querySelector("aside");
const menuBtn =  document.querySelector("#menu-btn")
const closeBtn =  document.querySelector("#close-btn")
const themeToggler  = document.querySelector(".theme-toggler");

// show sidebar
menuBtn.addEventListener('click',() =>{
    sideMenu.style.display = 'block';
})

// close sidebar

closeBtn.addEventListener('click',() =>{
    sideMenu.style.display = 'none';
})



// Dark theme 

themeToggler.addEventListener('click',()=>{
    document.body.classList.toggle('dark-theme-variables')

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
})


// // to Activate buttons
var  linkContainer = document.getElementById("myDiv");
var btns = linkContainer.getElementsByClassName("btn")

for(var i = 0; i < btns.length; i++){
   btns[i].addEventListener("click",function(){
       var current = document.getElementsByClassName("active");
       current[0].className = current[0].className.replace(" active","");
       this.className +=" active";
   });
}




// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closes")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
//Popover 
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});


</script>
<script src="/javascript/bootstrap.js"></script>
</body>
</html>