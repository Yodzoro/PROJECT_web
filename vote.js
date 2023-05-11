function submitVote1() {
    let answer1 = document.querySelector('input[name="vote1"]:checked');

    if(answer1) {
        let xmhttp1 = new XMLHttpRequest();
        xmhttp1.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("member_vote1").style.display="none";
                document.getElementById("vote_res1").innerHTML=this.responseText;
                document.getElementById("vote_res1").style.display = "block";
            }
        };
        xmhttp1.open("GET","skz-votes.php?vote1=" + answer1.value);
        xmhttp1.send();
        document.getElementById("vote-form1").reset();
    }
    else {
        alert("Choose an answer before submitting!");
    }
}
function submitVote2() {
    let answer2 = document.querySelector('input[name="vote2"]:checked');
    if(answer2) {
        let xmhttp2 = new XMLHttpRequest();
        xmhttp2.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("member_vote2").style.display="none";
                document.getElementById("vote_res2").innerHTML=this.responseText;
                document.getElementById("vote_res2").style.display = "block";
            }
        };
        xmhttp2.open("GET","ateez-votes.php?vote2="+answer2.value);
        xmhttp2.send();
        document.getElementById("vote-form2").reset();
    }
    else {
        alert("Choose an answer before submitting!");
    }
}
function submitVote3() {
    let answer3 = document.querySelector('input[name="vote3"]:checked');
    if(answer3) {
        let xmhttp3 = new XMLHttpRequest();
        xmhttp3.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById("member_vote3").style.display="none";
                document.getElementById("vote_res3").innerHTML=this.responseText;
                document.getElementById("vote_res3").style.display = "block";
            }
        };
        xmhttp3.open("GET","txt-votes.php?vote3="+answer3.value);
        xmhttp3.send();
        document.getElementById("vote-form3").reset();
    }
    else {
        alert("Choose an answer before submitting!");
    }
}
