function clickAccordion(t){
    var title = document.getElementsByClassName('faq-question-title')[t].parentElement;
    var icon = document.getElementsByClassName('icon-faq')[t];
    var body = title.lastElementChild.classList.contains('hide');

    if(body == true){
        title.lastElementChild.className = "show";
        icon.style.transform = "rotate("+45+"deg)";
    }else{
        title.lastElementChild.className = "hide";
        icon.style.transform = "rotate("+0+"deg)";
    }
}
