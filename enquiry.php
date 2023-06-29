<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test Mail</title>

</head>

          <form name="myform" method="post" action="emailsend.php">
  <table width="100%" border="0" cellpadding="5" cellspacing="3">
      <tr>
      <td width="40%" class="hostfea"><strong><font color="#000000">Name</font></strong></td>
      <td width="60%"> 
        <input name="name" type="text" size="50" required /> </td>
    </tr>
    <tr>
      <td class="hostfea"><strong><font color="#000000">Company Name </font></strong></td>
      <td> 
        <input name="cname" type="text" size="50" required/> </td>
    </tr>
      <tr>
      <td class="hostfea"><strong><font color="#000000">Email</font></strong></td>
      <td> 
        <input name="email" type="text" size="50" required/> </td>
    </tr>
    
    <tr>
      <td class="hostfea"><strong><font color="#000000">Phone</font></strong></td>
      <td> 
        <input name="phone" type="text" size="50" required/> </td>
    </tr>
    
    <tr>
      <td class="hostfea"><strong><font color="#000000">Product Name</font></strong></td>
      <td> 
        <input name="pname" type="text" size="50" required/> </td>
    </tr>
    
    
  <tr>
      <td class="hostfea"><strong><font color="#000000">Message</font></strong></td>
      <td> 
        <input type="text" name="msg" size="50" /> </td>
    </tr>
    
    <tr>
      <td class="hostfea">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  
    
    <tr>
      <td class="td"><strong><font color="#000000">Security code</font></strong> </td>
      <td class="td">
      <img src="captcha.php" /> <br/><br/>
      <input type="text" class="input"  name="cd" required> <br/> Enter code from above image.
      </td>
    </tr>
    <tr>
      <td colspan="4" align="center"  style="padding-left:100px;">
      <input type="submit" name="Submit" value="Submit" />&nbsp;&nbsp;&nbsp;  </tr>
    <tr><td>
    
  </td></tr>
  </table>
  </form>
        
       
</body>
</html>
