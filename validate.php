<script type="text/javascript">
    function myfun()
    {
        var p_id = document.getElementById('pid').value;

        if(p_id == ""){
            document.getElementById('pro_id').innerHTML ="** Please Enter Valid Number";
            return false;
        }

        if(isNaN(p_id)){
            document.getElementById('pro_id').innerHTML ="** user must use only Number not a character";
            return false;
        }


        var p_name = document.getElementById('pname').value;

        if(p_name == ""){
            document.getElementById('pro_name').innerHTML ="**Please enter the character";
            return false;
        }

        if(!isNaN(p_name)){
            document.getElementById('pro_name').innerHTML ="**only character are allowed";
            return false;
        }
        
        var hsn_code = document.getElementById('hcode').value;

        if(hsn_code == ""){
            document.getElementById('h_code').innerHTML ="** please enter valid code";
            return false;
        }

        if(isNaN(hsn_code)){
            document.getElementById('h_code').innerHTML ="**User must use only number";
            return false;
        }

        var costp = document.getElementById('cpp').value;

        if(costp == ""){
            document.getElementById('cp').innerHTML ="**please enter valid number";
            return false;
        }

        if(isNaN(costp)){
            document.getElementById('cp').innerHTML ="**User must use only number";
            return false;
        }

        var qnty = document.getElementById('qty').value;

        if(qnty == ""){
            document.getElementById('quantity').innerHTML ="**please enter valid value";
            return false;
        }

        if(isNaN(qnty)){
            document.getElementById('quantity').innerHTML ="**User must use only Number";
            return false;
        }

        if(qnty.length<=1) || (f_name.length > 20){
            document.getElementById('quantity').innerHTML ="**must be select one";
            return false;
        }

        var selling = document.getElementById('spp').value;

        if(selling == ""){
            document.getElementById('sell').innerHTML ="**please enter valid value";
            return false;
        }
        if(isNaN(selling)){
            document.getElementById('sell').innerHTML ="**User must use only number";
            return falseyhg;
        }
    }
</script>