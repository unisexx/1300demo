<h3>จัดการคลังความรู้ (เพิ่ม / แก้ไข)</h3>
<table class="tbadd">
<tr>
  <th>หัวข้อคำถาม<span class="Txt_red_12"> *</span></th>
  <td>
    <input type="text" class="form-control" id="exampleInputName" placeholder="คำถาม" style="width:600px;" />
  </td>
</tr>
<tr>
  <th>คำตอบ<span class="Txt_red_12"> *</span></th>
  <td>
    <textarea class="form-control knowledge" id="exampleInputEmail2"></textarea>
</td>
</tr>
<tr>
  <th>กลุ่มเป้าหมาย<span class="Txt_red_12"> *</span></th>
  <td><span class="form-inline">
    <select name="lunch" class="selectpicker" id="lunch2" title="ทุกกลุ่มเป้าหมาย" data-live-search="true">
      <option>++ เลือกกลุ่มเป้าหมาย ++</option>
      <option>เด็ก</option>
      <option>เยาวชน</option>
      <option>ผู้ใหญ่</option>
      <option>ผู้สูงอายุ</option>
    </select>
  </span></td>
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