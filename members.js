function openMember(evt, id) {
    var i, pf_inner, member_link;
    pf_inner = document.getElementsByClassName("pf_inner");
    for (i = 0; i < pf_inner.length; i++) {
        pf_inner[i].style.display = "none";
    }
    member_link = document.getElementsByClassName("member_link");
    for (i = 0; i < member_link.length; i++) {
        member_link[i].className = member_link[i].className.replace(" active", "");
    }
    document.getElementById(id).style.display = "block";
    evt.currentTarget.className += " active";
}