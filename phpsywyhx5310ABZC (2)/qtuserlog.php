<script language="javascript">
function checklog()
{
	if(document.userlog.username.value=="" || document.userlog.pwd1.value=="" || document.userlog.yzm.value=="")
	{
		alert("请输入完整");
		return false;
	}
}
</script>
<?php 
					if ($_SESSION['username']=="" )
					{
				?>
			 <form action="userlog_post.php" method="post" name="userlog" id="userlog">
              <li>
                <input type="text" name="username" id="username" placeholder="用户名">
              </li>
              <li>
                <input type="text" name="pwd1" id="pwd1" placeholder="密码">
              </li>
			  <li>
                <select name="cx" id="cx" style="width:100px; height:22px; color:#888888;  background-color:#8cb88b; ">
                             <option value='管理员'>管理员</option><option value='用户'>用户</option>
                            </select>&nbsp;
              </li>
			  <li>
                <input type="text" name="yzm" id="yzm" placeholder="验证码">
              </li>
			   <li>
               <img alt="刷新验证码" onclick="this.src='code.php?time='+new Date().getTime();" src="code.php?time='+new Date().getTime();" style="cursor:pointer;" />&nbsp;
              </li>
              <li>
                <input type="submit" name="submit" id="submit" value="登陆" class="login">
              </li>
              <li>
                <input type="button" name="submit" id="submit" value="注册" class="sign" onclick="javascript:location.href='userreg.php';">
              </li>
			   </form>
			   
			    <?php 
							}
				  else
				  {
				 ?>
				  <li>
                 用户名:<?php echo $_SESSION['username']?>;&nbsp;
              </li>
              <li>
                权限:<?php echo $_SESSION['cx']?>;&nbsp;
              </li>
			  <li>
                欢迎您的到来!&nbsp;
              </li>
			 
              <li>
                <input type="button" name="submit" id="submit" value="退出" class="login" onclick="javascript:location.href='logout.php';" style="cursor:pointer">
              </li>
              <li>
                <input type="submit" name="submit" id="submit" value="个人中心" class="sign2" onclick="javascript:location.href='main.php';" style="cursor:pointer">
              </li>
				 
				   <?php
				 }
				 ?>
