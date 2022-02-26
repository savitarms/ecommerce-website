$('.add').click(function () {
    if ($(this).prev().val() < 6) {
    $(this).prev().val(+$(this).prev().val() + 1);
    }
});
$('.sub').click(function () {
    if ($(this).next().val() > 1) {
    if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    }
});


// document.getElementById('sub').setAttribute('disabled', 'disabled')

// var valueCount

// document.getElementById('add').addEventListener('click', function() {
//     valueCount = document.getElementById('quantity').value

//     valueCount++;

//     document.getElementById('quantity').value = valueCount

//     if(valueCount > 1) {
//         document.getElementById('sub').removeAttribute('disabled')
//         document.getElementById('sub').classList.remove('disabled')
//     }
// })


// document.getElementById('sub').addEventListener('click', function() {
//     valueCount = document.getElementById('quantity').value

//     valueCount--;

//     document.getElementById('quantity').value = valueCount

//     if(valueCount == 1) {
//         document.getElementById('sub').setAttribute('disabled', 'disabled')
//     }
// })