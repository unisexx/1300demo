<h3>หน่วยงานภายนอก (เพิ่ม / แก้ไข)</h3>
<table class="tbadd">
<tr>
  <th>ชื่อหน่วยงานภายนอก<span class="Txt_red_12"> *</span></th>
  <td>
    <input type="text" class="form-control" id="exampleInputName" placeholder="ชื่อหน่วยงานภายนอก" style="width:500px;" />
  </td>
</tr>
<tr>
  <th>ลักษณะหน่วยงาน<span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline">
    <select name="select" class="form-control">
         	<option selected="selected">- เลือกลักษณะหน่วยงาน -</option>
            <option>โรงพยาบาล</option>
            <option>ศูนย์บริการสาธารณสุข</option>
            <option>สถานีตำรวจ</option>
          	<option>สำนักงานเขต</option>
          	<option>องค์กรบริหารส่วนท้องถิ่น</option>
          	<option>โรงเรียน</option>
          	<option>มูลนิธิ</option>
            <option>อื่นๆ</option>
      	 </select>
  </div></td>
</tr>
<tr>
  <th>จังหวัด<span class="Txt_red_12"> *</span></th>
  <td><div class="form-inline">
    <select name="select2" class="form-control" style="width:auto;">
      <option>+ เลือกจังหวัด +</option>
      </select></div>
    </td>
</tr>
<tr>
  <th>เปิด / ปิดการใช้งาน</th>
  <td><input name="checkbox" type="checkbox" id="checkbox" checked="checked" />
    เปิดใช้งาน</td>
</tr>
</table>
<div id="btnBoxAdd">
  <input name="input" type="button" title="บันทึก" value="บันทึก" class="btn btn-primary" style="width:100px;"/>
  <input name="input2" type="button" title="ย้อนกลับ" value="ย้อนกลับ"  onclick="history.back(-1)"  class="btn btn-default" style="width:100px;"/>
</div>