<!-- Fixed navbar -->

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="padding-top:10px;"><img src="images/logo-name.png" width="233" height="66" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          		<li><a href="ticket.php?act=form"><img src="images/add_ticket.png" width="16" height="16" /> เพิ่มเรื่อง</a></li>
          		<li><a href="ticket.php"><img src="images/help_ticket.png" width="16" height="16" /> เรื่องรับแจ้ง</a></li>
				<li><a href="bookforward.php"><img src="images/bookforward.png" width="16" height="16" /> หนังสือประสานส่งต่อ</a></li>
                <li><a href="knowledge.php"><img src="images/knowledge.png" width="16" height="16" /> คลังความรู้</a></li>
          </ul>
          
          <ul class="nav navbar-nav">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="images/report_ticket.png" width="16" height="16" /> รายงาน <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="report.php?act=daily_r1">สถิติการให้บริการผู้ประสบปัญหาสังคม ประจำวัน</a></li>
                <li><a href="report.php?act=monthly_r1">สถิติการให้บริการผู้ประสบปัญหาสังคม ประจำเดือน</a></li>
                <li><a href="report.php?act=yearly_r1">สถิติการให้บริการผู้ประสบปัญหาสังคม ประจำปี</a></li>
                <li><a href="report.php?act=r2">รายงานวัน-เวลาการปฏิบัติงาน (log-in / log out)</a></li>
                <li><a href="report.php?act=r3">รายงานภาพรวมการปฏิบัติงาน นักสังคมสงเคราะห์ / เจ้าหน้าที่ Hotline</a></li>
                <li><a href="report.php?act=r4">รายงานการทำหนังสือประสานส่งต่อ แยกตามภูมิภาคและหน่วยงาน</a></li>
                <li><a href="report.php?act=r5">รายงานการทำหนังสือประสานส่งต่อ แบ่งตามจังหวัด</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="logfile.php">ประวัติการใช้งาน (Logfile)</a></li>
                </ul>
            </li>
          </ul>

         <ul class="nav navbar-nav navbar-right">
          	 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="images/setting_ticket.png" width="16" height="16" /> ตั้งค่าข้อมูลหลัก <span class="caret"></span></a>
              <ul class="dropdown-menu" style="height:auto; max-height:400px; overflow-x: hidden;">
                <li><a href="user.php">ผู้ใช้งาน</a></li>
                <li><a href="permission.php">สิทธิ์การใช้งาน</a></li>
                <li><a href="knowledge_set.php">จัดการคลังความรู้</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="target.php">กลุ่มเป้าหมาย / ปัญหาหลัก / ปัญหาย่อย</a></li>
                <li><a href="department.php">*กระทรวง / กรม / สำนัก/กอง</a></li>
                <li><a href="dept_out.php">หน่วยงานภายนอก</a></li>
                <li><a href="dept_out_type.php">ลักษณะหน่วยงานภายนอก</a></li>
                <li><a href="country.php">*ประเทศ</a></li>
                <li><a href="province.php">*จังหวัด/รัฐ</a></li>
                <li><a href="amphoe.php">*อำเภอ</a></li>
                <li><a href="tumbon.php">*ตำบล</a></li>
                <li><a href="prefix.php">*คำนำหน้า</a></li>
                <li><a href="gender.php">*เพศ</a></li>
                <li><a href="religion.php">*ศาสนา</a></li>
                <li><a href="nationality.php">*สัญชาติ</a></li>
                <li><a href="race.php">เชื้อชาติ</a></li>
                <li><a href="channel.php">ช่องทางรับเรื่อง</a></li>
                <li><a href="dept_info.php">หน่วยงานที่แจ้ง</a></li>
                <li><a href="career.php">อาชีพ</a></li>
                <li><a href="marital_status.php">สถานภาพสมรส</a></li>
                <li><a href="cable_type.php">ประเภทสาย</a></li> 
                <li><a href="category_info.php">หมวดหมู่ผู้แจ้ง</a></li>
                <li><a href="channel_know.php">ช่องทางรู้จัก 1300</a></li>
                <li><a href="urgent.php">ระดับความเร่งด่วน</a></li>
                <li><a href="doc_type.php">ประเภทเอกสาร</a></li>
                <li><a href="position.php">ตำแหน่ง</a></li>
                <li><a href="userservice_type.php">ประเภทผู้ใช้บริการ</a></li>
                <li><a href="risk.php">การประเมินความเสี่ยง</a></li>
                <li><a href="help.php">แนวทางการช่วยเหลือฯ</a></li>
              </ul>
            </li>
          <li><a href="user.php?act=form" class="vtip" title="นายเอกพินิจ แก้วเสนา"><img src="images/user_info.png" width="16" height="16" /></a></li>
            <li><a href="product.php"><img src="images/logout.png" width="16" height="16" class="vtip" title="ออกจากระบบ" /></a></li>
          </ul>
          
          <!--<ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>-->
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="clear" style="margin-bottom:20px;"></div>

