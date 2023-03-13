var product_name = document.forms['form']['product_name'];
var product_id = document.forms['form']['product_id'];

var name_error = document.getElementById('name_error');
var id_error = document.getElementById('id_error');

function validated(){
    if(product_name.value.length < 9){
        product_name.style.border = "1px solid red";
        product_name.focus();
        return false;
    }
}