<html>
<head><title>การสร้างฟอร์ม</title></head>
<body background ="green-bg.jpg">
<style type="text/css">
body {
background-image: url(green-bg.jpg) ;
background-attachment:fixed;
background-repeat: no-repeat; }
</style>

<form method="get" action="lab5-9cal.php">
  <table border="1" align="center" width="600"  bgcolor="#7CFC00" bordercolor="	#669900">
    <tr  background= "haedbg.jpg" height ="250">
      <td colspan="2" align="center">
        <MARQUEE behavior=alternate direction=left scrollAmount=3 width="4%"><font face=Webdings>4</font></MARQUEE><MARQUEE scrollAmount=1 direction=left width="2%">| | |</MARQUEE>แบบฟอร์มประวัติส่วนตัว<MARQUEE scrollAmount=1 direction=right width="2%">| | |</MARQUEE><MARQUEE behavior=alternate direction=right scrollAmount=3 width="4%"><font face=Webdings>3</font></MARQUEE>

       </td>
</tr>
<tr>
  <td>Enter First name :</td>
  <td> <input type="text" name="n" size="30" value=""> </td></tr>

    <tr>
      <td>Enter Last name :</td>
        <td> <input type="text" name="la" size="30" value=""> </td></tr>

    <td> Enter Nickname :</td>
      <td> <input type="text" name="nick" size="10" value=""> </td></tr>
    <tr>
      <td> Enter E-mail :</td>
        <td> <input type="text" name="mail" size="50" value=""> </td></tr>
        <tr>
          <td> Enter Brithday</td></tr>
          <tr>  <td>>>Day
          </td>
            <td> <select>
              <option>1
                <option>2
                  <option>3
                    <option>4
                      <option>5
                        <option>6
                          <option>7
                            <option>8
                              <option>9
                                <option>10
                                  <option>11
                                    <option>12
                                      <option>13
                                        <option>14
                                          <option>15
                                            <option>16
                                              <option>17
                <option>18
                        <option>19
                          <option>20
                        <option>21
                        <option>22
                            <option>23
<option>24
  <option>25
    <option>26
      <option>27
       <option>28
        <option>29

  <option>30
      <option>31

      </select></td></tr>
      <tr>
<td> >>Month</td> <td><select>
<option>มกราคม
  <option>กุมภาพันธ์
    <option>มีนาคม
      <option>เมษายน
        <option>พฤษภาคม
          <option>มิถุนายน
            <option>กรกฎาคม
              <option>สิงหาคม
                <option>กันยายน
                  <option>ตุลาคม
                    <option>พฤศจิกายน
                      <option>ธันวาคม


</select>

        </td></tr>
<tr><td>Sex</td>
<td>
<input type="radio" name="sex" value="Female">Female</br>
<input type="radio" name="sex" value="Male">Male </br>
</td>
</tr>

<tr>
  <td> Enter Age  :</td>
    <td> <input type="radio" name="a" value="13-15">13-15</br>
      <input type="radio" name="a" value="16-18">16-18</br>
      <input type="radio" name="a" value="19-22">19-22</br>
           <input type="radio" name="a" value="23-60">23-60</br>
            <input type="radio" name="a" value="60ปีขึ้นไป">60ปีขึ้นไป</br>
      </td>
  </tr>

    <tr><td> Enter Telephone number : </td>
    <td><input type="text" name="tel" maxlength="10" value=""></td>
    </tr>
    <tr><td> Enter ID Card NO. : </td>
    <td><input type="text" name="no" maxlength="13" value=""></td>
    </tr>
<tr><td colspan="2" align="center"> <input type="submit" value="  OK "/>
  <input type="submit" value="  Clear "/> </td>
</tr>

</table>
</form>
</body>
</html>
