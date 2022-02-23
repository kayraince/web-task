function click() {
    let i = document.querySelector("#counter")
    let counter = parseInt(i.innerText)
    i.innerText = counter + 1
}
function editPrice() {
    if ($('#vanish').hasClass('price-info'))
        $('#vanish').removeClass('price-info')
    else $('#vanish').addClass('price-info')

}
function changePrice() {
    document.getElementById('slct').addEventListener('click', editPrice);
}

function scroller() {
    (".box").scrollBar();
}

function editStyle1() {
    if ($('#pack-box-1').hasClass('blacken'))
        $('#pack-box-1').removeClass('blacken')
    else $('#pack-box-1').addClass('blacken')
    if ($('#black-text-1').hasClass('whiten'))
        $('#black-text-1').removeClass('whiten')
    else $('#black-text-1').addClass('whiten')
}
function editStyle2() {
    if ($('#pack-box-2').hasClass('blacken'))
        $('#pack-box-2').removeClass('blacken')
    else $('#pack-box-2').addClass('blacken')
    if ($('#black-text-2').hasClass('whiten'))
        $('#black-text-2').removeClass('whiten')
    else $('#black-text-2').addClass('whiten')
}
function editStyle3() {
    if ($('#pack-box-3').hasClass('blacken'))
        $('#pack-box-3').removeClass('blacken')
    else $('#pack-box-3').addClass('blacken')
    if ($('#black-text-3').hasClass('whiten'))
        $('#black-text-3').removeClass('whiten')
    else $('#black-text-3').addClass('whiten')
}
function editStyle4() {
    if ($('#pack-box-4').hasClass('blacken'))
        $('#pack-box-4').removeClass('blacken')
    else $('#pack-box-4').addClass('blacken')
    if ($('#black-text-4').hasClass('whiten'))
        $('#black-text-4').removeClass('whiten')
    else $('#black-text-4').addClass('whiten')
}
function editStyle5() {
    if ($('#pack-box-5').hasClass('blacken'))
        $('#pack-box-5').removeClass('blacken')
    else $('#pack-box-5').addClass('blacken')
    if ($('#black-text-5').hasClass('whiten'))
        $('#black-text-5').removeClass('whiten')
    else $('#black-text-5').addClass('whiten')
}
function editStyle6() {
    if ($('#pack-box-6').hasClass('blacken'))
        $('#pack-box-6').removeClass('blacken')
    else $('#pack-box-6').addClass('blacken')
    if ($('#black-text-6').hasClass('whiten'))
        $('#black-text-6').removeClass('whiten')
    else $('#black-text-6').addClass('whiten')
}




function changeStyle1() {
    document.getElementById('pack-box-1').addEventListener('click', editStyle1);
}

function changeStyle2() {
    document.getElementById('pack-box-2').addEventListener('click', editStyle2);
}

function changeStyle3() {
    document.getElementById('pack-box-3').addEventListener('click', editStyle3);
}
function changeStyle4() {
    document.getElementById('pack-box-4').addEventListener('click', editStyle4);
}
function changeStyle5() {
    document.getElementById('pack-box-5').addEventListener('click', editStyle5);
}
function changeStyle6() {
    document.getElementById('pack-box-6').addEventListener('click', editStyle6);
}

function editText() {
    if ($('#black-text').hasClass('whiten'))
        $('#black-text').removeClass('whiten')
    else $('#black-text').addClass('whiten')
}
function changeText1() {
    document.getElementById('pack-box-1').addEventListener('click', editText);
}
function changeText2() {
    document.getElementById('pack-box-2').addEventListener('click', editText);
}
function changeText3() {
    document.getElementById('pack-box-3').addEventListener('click', editText);
}
function changeText4() {
    document.getElementById('pack-box-4').addEventListener('click', editText);
}
function changeText5() {
    document.getElementById('pack-box-5').addEventListener('click', editText);
}
function changeText6() {
    document.getElementById('pack-box-6').addEventListener('click', editText);
}
function price_manage(id) {
    console.log(id, JSON.parse(payload));
}

//function undoStyle() {
//if ( $('#pack-box-1').hasClass('blacken') )
// $('#pack-box-1').removeClass('blacken');
//}



