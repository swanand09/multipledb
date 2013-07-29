 <form action="process_login.php" method="post" name="login_frm">
    <fieldset>
      <legend>Fieldset</legend>

      <div class="row">
        <div class="large-4 columns">
          <label>DB SERVER</label>
          <select name="db_server">
              <option value="mysql">MYSQL</option>
              <option value="mssql">MSSQL</option>
              <option value="oci">OCI</option>
          </select>    
        </div>  
      </div>     
      <div class="row">    
        <div class="large-4 columns">
          <label>DB</label>
          <input type="text" name="db_name" placeholder="database">              
        </div>  
      </div>  
      <div class="row">
        <div class="large-4 columns">
          <label>Host</label>
          <input type="text" name="db_ip" placeholder="ip">
        </div>
       </div>     
      <div class="row">     
        <div class="large-4 columns">
          <label>Username</label>
          <input type="text" name="db_usrnm" placeholder="username">
        </div>
      </div>    
      <div class="row">    
        <div class="large-4 columns">
           <div class="row collapse"> 
            <label>Password</label>
            <div class="small-10 columns">
              <input type="password" name="db_pwd" placeholder="password">
            </div>  
            <div class="small-2 columns">
                <a href="javascript:this.login_frm.submit();" class="button prefix">Login</a>
            </div>
           </div>   
        </div>
      </div>

    </fieldset>
</form>   