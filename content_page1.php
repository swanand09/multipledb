<script>
     var content = '<form  name="login_frm" id="login_frm"><fieldset> <legend>DB connection</legend><div class="row"><div class="large-4 columns"><label>DB SERVER</label><select name="db_server" id="db_server"><option value="mysql">MYSQL</option><option value="mssql">MSSQL</option><option value="oci">OCI</option></select></div></div><div class="row"><div class="large-4 columns"><label>DB</label><input type="text" name="db_name" id="db_name" placeholder="database"></div></div><div class="row"><div class="large-4 columns"><label>Host</label><input type="text" name="db_ip" id="db_ip" placeholder="ip"></div></div><div class="row"><div class="large-4 columns"><label>Username</label><input type="text" name="db_usrnm" id="db_usrnm" placeholder="username"></div></div><div class="row"><div class="large-4 columns"><div class="row collapse"><label>Password</label><div class="small-10 columns"><input type="password" name="db_pwd" id="db_pwd" placeholder="password"></div><div class="small-2 columns"><input type="submit" name="sub_but" value="Login" class="button prefix"></div></div></div></div></fieldset></form>';     
    $(document).ready(function() {
       
        $("#content_main").html(content);
        
        $("#login_frm").submit(function(){
            $.ajax({
               type: "POST",
               url: "process_login.php",
                data: {
                    db_server: $("#db_server").val(),
                    db_name  : $("#db_name").val(),
                    db_ip    : $("#db_ip").val(),
                    db_usrnm : $("#db_usrnm").val(),
                    db_pwd   : $("#db_pwd").val()
                    }
               }).done(function( result ) {
               $("#content_main").html("<div id='result'>"+result+"<div class='small-2 columns'><a href='javascript:retourCont();' class='button prefix'>Back</a></div></div>");
           });
          
           return false;
        });
        
       
       });
        function retourCont()
        {
            $("#content_main").html(content);
        }
 </script>
<div id="content_main">
<!--<form  name="login_frm" onsubmit="javascript:process_login();">
    <fieldset>
      <legend>DB connection</legend>

      <div class="row">
        <div class="large-4 columns">
          <label>DB SERVER</label>
          <select name="db_server" id="db_server">
              <option value="mysql">MYSQL</option>
              <option value="mssql">MSSQL</option>
              <option value="oci">OCI</option>
          </select>    
        </div>  
      </div>     
      <div class="row">    
        <div class="large-4 columns">
          <label>DB</label>
          <input type="text" name="db_name" id="db_name" placeholder="database">              
        </div>  
      </div>  
      <div class="row">
        <div class="large-4 columns">
          <label>Host</label>
          <input type="text" name="db_ip" id="db_ip" placeholder="ip">
        </div>
       </div>     
      <div class="row">     
        <div class="large-4 columns">
          <label>Username</label>
          <input type="text" name="db_usrnm" id="db_usrnm" placeholder="username">
        </div>
      </div>    
      <div class="row">    
        <div class="large-4 columns">
           <div class="row collapse"> 
            <label>Password</label>
            <div class="small-10 columns">
              <input type="password" name="db_pwd" id="db_pwd" placeholder="password">
            </div>  
            <div class="small-2 columns">
                 <input type="submit" name="sub_but" value="Login" class="button prefix">
            </div>
           </div>   
        </div>
      </div>

    </fieldset>
</form>-->
</div>
