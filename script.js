$(".mobile-nav-button").click(function(){
    $( "#mobileNav" ).slideToggle();
})

$(window).resize(function(){
    $( "#mobileNav").hide();
})


/*These functions display or hide embedded facebook reviews 
found throughout the portfolio with the click of a button.*/
function showReview(){ 
  document.getElementById('reviewSlide').style.display = "block";
}
function hideReview(){
  document.getElementById('reviewSlide').style.display = "none";  
}
