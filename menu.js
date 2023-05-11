function openMenu(){
    document.getElementById("myNavigation").style.height="100%";
    document.getElementById("generalB").classList.add("menu_on")
}
function closeMenu(){
    document.getElementById("myNavigation").style.height="0";
    document.getElementById("generalB").classList.remove("menu_on")
}
/*
$(".menu_list li a").hover(function(){
    $(this).toggleClass("artist_color")
})*/