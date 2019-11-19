<h3>หนังสือประสานส่งต่อ</h3>
<div id="search">
<div id="searchBox">
<div class="form-inline">
   <input type="text" class="form-control fid" style="width:120px;" id="exampleInputName2" placeholder="เลขที่รับแจ้ง"> <input type="text" class="form-control" style="width:370px;" id="exampleInputName2" placeholder="รายละเอียด">
   
   <input type="text" class="form-control" id="tags" style="width:450px;" placeholder="พิมพ์ชื่อหน่วยงาน (auto complete)">

<div style="margin-top:10px;">
    <input type="text" class="form-control fdate vtip" title="วันที่แผนและการช่วยเหลือ" id="exampleInputEmail2" style="width:100px;" />
     <img src="images/calendar.png" alt="" width="24" height="24" /> 
    <select name="select4" class="form-control" style="width:auto;">
      <option>+ สถานะประสานส่งต่อ +</option>
      <option>อยู่ระหว่างการดำเนินงาน</option>
      <option>ประสานส่งเรียบร้อย</option>
    </select>
  
  <button type="submit" class="btn btn-info"><img src="images/search.png" width="16" height="16" />ค้นหา</button></div>
</div>
</div>
</div>

<div id="status" style="margin-top:30px;">
<span><img src="images/doc_wait.png" width="24" height="24" /> <a href="#">อยู่ระหว่างการดำเนินงาน (10)</a></span>
<span><img src="images/doc_ok.png" width="24" height="24" /> <a href="#">ประสานส่งเรียบร้อย (489)</a></span>
</div>

<div class="paginationTG">
	<ul>
    <li style="margin-right:10px;">หน้าที่</li>
	<li class="currentpage">1</li><li ><a href=''>2</a></li>
	<li><a href="">3</a></li>
	<li><a href="">4</a></li>
	<li><a href="">5</a></li>
	<li><a href="">6</a></li>
	<li><a href="">7</a></li> . . . <li ><a href="">19</a></li>
	<li><a href="">20</a></li><li ><a href="">21</a></li>
	</ul>
</div>

<table class="tblist">
<tr>
  <th>ลำดับ</th>
  <th>รหัสเรื่อง</th>
  <th>วันเวลาแผนช่วยเหลือ</th>
  <th style="width:25%">รายละเอียดเหตุการณ์</th>
  <th>ส่งต่อหน่วยงาน</th>
  <th>จัดการ</th>
  </tr>
<tr>
  <td>1</td>
  <td>ุ17-01-00038</td>
  <td>07 กุมภาพันธ์ 2560<br />
    10:20</td>
  <td>พบชายอายุประมาณ 40 ปี ร้องเพลงขอ เงิน บริเวณบิ๊กซีอ้อมใหญ่<br />
    [นครปฐม]</td>
  <td><div class="DeptSent">
    ศูนย์ส่วนเหลือสังคมจังหวัดนครปฐม <a href="<? basename($_SERVER['PHP_SELF'])?>?act=print1" target="_blank"><img src="images/printer.png" width="22" height="22" /></a> <br />
    นางประภา  รุ่งสุวนิจฉัย (นักสังคมสงเคราะห์ปฎิบัติการ)<br />
    034-123-456
    <span style="border-top:1px dotted #ccc; width:100%; height:1px; display:inline-block"></span>
    <img src="images/doc_ok.png" alt="" width="24" height="24" /> ผู้รับเรื่อง : นายพีรพงษ์  นันทวดีพิศาล<br />
    เลขที่หนังสือ : 60/30 ลงวันที 08/02/2560<br />
    อีเมล์ : perapong@m-society.go.th, ossnakornprathom@m-society.go.th<br />
    ผู้ดำเนินการ : นายวิทธิลักษณ์ จันทร์ธนสมบัติ</div>
    
    <div class="DeptSent">สำนักงานพัฒนาสังคมและความมั่นคงของมนุษย์จังหวัดนครปฐม <a href="<? basename($_SERVER['PHP_SELF'])?>?act=print1" target="_blank"><img src="images/printer.png" width="22" height="22" /></a><br />
      นายบุญชู  วงศ์ภักดี (นักสังคมสงเคราะห์ปฎิบัติการ)<br />
      034-987-654
      <span style="border-top:1px dotted #ccc; width:100%; height:1px; display:inline-block"></span>
      <img src="images/doc_ok.png" alt="" width="24" height="24" /> ผู้รับเรื่อง : นายบุญชู  วงศ์ภักด<br />
      เลขที่หนังสือ : 60/31 ลงวันที 08/02/2560<br />
      อีเมล์ : nakornprathom@m-society.go.th<br />
      ผู้ดำเนินการ : นายธวัชชัย ชัยรัตน์</div>
    
    <div class="DeptSent">โรงพยาบาลนครปฐม<br />
      แพทย์หญิงพรพรม  ดวงนิล (จิตแพทย์)<br />
      034-254-154
      <span style="border-top:1px dotted #ccc; width:100%; height:1px; display:inline-block"></span>
      <img src="images/doc_wait.png" alt="" width="24" height="24" /> ผู้รับเรื่อง : แพทย์หญิงพรพรม  ดวงนิล<br />
      เลขที่หนังสือ : 60/32 ลงวันที 09/02/2560<br />
      อีเมล์ : pornpom@gmail.com
      <br />
      ผู้ดำเนินการ : -</div>
  </td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr class="odd">
  <td>2</td>
  <td>17-01-00030</td>
  <td>18 มกราคม 2560<br />
    19:05</td>
  <td>ขอความช่วยเหลือ นายธนัทโชค ชาญด้วยกิจ อายุ 33 ปี (สามี) สูญหาย<br />
    [นนทบุรี]</td>
  <td>
    <div class="DeptSent">
      ศูนย์ส่วนเหลือสังคมจังหวัดนนทบุรี <a href="<? basename($_SERVER['PHP_SELF'])?>?act=print1" target="_blank"><img src="images/printer.png" width="22" height="22" /></a> <br />
      นายวรพจน์  จงจิตต์ (นักสังคมสงเคราะห์ปฎิบัติการ)<br />
      02-222-3333
      <span style="border-top:1px dotted #ccc; width:100%; height:1px; display:inline-block"></span>
      <img src="images/doc_ok.png" alt="" width="24" height="24" />  ผู้รับเรื่อง : นายวรพจน์  จงจิตต์<br />
      เลขที่หนังสือ : 60/28 ลงวันที 19/01/2560<br />
      อีเมล์ : ossnakornprathom@m-society.go.th  
      <br />
      ผู้ดำเนินการ : นายธวัชชัย ชัยรัตน์<br />
      </div>
    <div class="DeptSent">สถานีตำรวจภูธรเมืองนนทบุรี<br />
      ร.ต.ต. สมศักดิ์ อุ่นเมือง (รองสารวัตร)<br />
      02-525-0900
      <span style="border-top:1px dotted #ccc; width:100%; height:1px; display:inline-block"></span>
      <img src="images/doc_wait.png" alt="" width="24" height="24" /> ผู้รับเรื่อง : ร.ต.ต. สมศักดิ์ อุ่นเมือง<br />
      เลขที่หนังสือ : 60/29 ลงวันที 19/01/2560<br />
      อีเมล์ : somsak.aunmeung@gmail.com  <br />
    ผู้ดำเนินการ : -</div></td>
  <td><a href="<?=basename($_SERVER['PHP_SELF'])?>?act=form"><img src="images/edit.png" width="24" height="24" style="margin-right:10px;" class="vtip" title="แก้ไขรายการนี้" /></a><img src="images/remove.png" width="24" height="24" class="vtip" title="ลบรายการนี้"  /></td>
  </tr>
<tr>
  <td>3</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
<tr class="odd">
  <td>4</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
<tr>
  <td>5</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
<tr class="odd">
  <td>6</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
<tr>
  <td>7</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td class="odd">&nbsp;</td>
  </tr>
</table>

<div class="paginationTG">
	<ul>
    <li style="margin-right:10px;">หน้าที่</li>
	<li class="currentpage">1</li><li ><a href=''>2</a></li>
	<li><a href="">3</a></li>
	<li><a href="">4</a></li>
	<li><a href="">5</a></li>
	<li><a href="">6</a></li>
	<li><a href="">7</a></li> . . . <li ><a href="">19</a></li>
	<li><a href="">20</a></li><li ><a href="">21</a></li>
  </ul>
</div>