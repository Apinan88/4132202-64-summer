<form id="frm_add"> 
<div>
    <label > Name : </label>
    <input type="text" name="name">
</div> 
<div>
    <label > Surname : </label>
    <input type="text" name="sname">
</div>
 <div>
    <label > Age : </label>
    <input type="text" name="age">
</div> 
<div>
    <label > Sex : </label>
     <select name="sex" >
         <option value="">โปรดเลิอก</option>
         <option value="1">ชาย</option>
         <option value="2">หญิง</option>
     </select>
</div>
<button type="submit">save</button>
<button type="reset">reset</button>    
</form>

<script>
    $("#frm_add").submit(function(e){
        e.preventDefault();

        let data = $(this).serialize()
        //console.log(data);

        $.ajax({
            url:"./query/user_add.php",
            method: "POST",
            data: data,
            success: function(msg) {
                console.log(msg);
            }
        });
    });
</script>