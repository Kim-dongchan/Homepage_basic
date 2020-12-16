<SCRIPT LANGUAGE="JavaScript">
<!--
/* This script and many more are available free online at
The JavaScript Source!! http://javascript.internet.com
Created by: Patrick Fitzgerald | http://www.barelyfitz.com/ */
/*==================================================*
 $Id: verifynotify.js,v 1.1 2003/09/18 02:48:36 pat Exp $
 Copyright 2003 Patrick Fitzgerald
 http://www.barelyfitz.com/webdesign/articles/verify-notify/

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *==================================================*/

function verifynotify(field1, field2, result_id, match_html, nomatch_html) {
  this.field1 = field1;
  this.field2 = field2;
  this.result_id = result_id;
  this.match_html = match_html;
  this.nomatch_html = nomatch_html;

  this.check = function() {
    // Make sure we don't cause an error
    // for browsers that do not support getElementById
    if (!this.result_id) { return false; }
    if (!document.getElementById){ return false; }
    r = document.getElementById(this.result_id);
    if (!r){ return false; }

    if (this.field1.value != "" && this.field1.value == this.field2.value) {
      r.innerHTML = this.match_html;
    } else {
      r.innerHTML = this.nomatch_html;
    }
  }
}

function verifyInput() {
  verify = new verifynotify();
  verify.field1 = document.password_form.password1;
  verify.field2 = document.password_form.password2;
  verify.result_id = "password_result";
  verify.match_html = "<span style=\"color:blue\">패스워드가 일치합니다!<\/span>";
  verify.nomatch_html = "<span style=\"color:red\">귀하의 비밀 번호가 일치하는지 확인하십시오!<\/span>";

  // Update the result message
  verify.check();
}

// Multiple onload function created by: Simon Willison
// http://simonwillison.net/2004/May/26/addLoadEvent/
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}

addLoadEvent(function() {
  verifyInput();
});
//-->
</SCRIPT>

<fieldset>
<form name="password_form">
<table>
<tr><td>Password: <input type="password" name="password1" onkeyup="verify.check()"></td></tr>
<tr><td>Re-enter Password: <input type="password" name="password2" onkeyup="verify.check()"></td></tr>
<tr><td><div id="password_result"> </div></td></tr>
</table>
</form>
</fieldset>
