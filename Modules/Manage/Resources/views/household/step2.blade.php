
<div class="tab-pane fade" role="tabpanel" id="step2" aria-labelledby="step2-tab">
    <br>
    <h3>2.สมาชิกในครัวเรือน</h3>

    <div class="card-body">
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">
                    <label>ชื่อ - นามสกุล:</label>
                    <input type="text" name="member_name" class="form-control" placeholder="ชื่อ - นามสกุล" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>เพศ</label>
                    <select name="member_sex" class="form-control" required>
                        <option value="">-- เลือก --</option>
                        <option value="ชาย">ชาย</option>
                        <option value="หญิง">หญิง</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label><b>ความสัมพันธ์ในครัวเรือน:</b></label>
                    <div class="radio-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio">
                                    <input type="radio" name="member_hhold_relations" value="หัวหน้าครัวเรือน" required>
                                    <span></span>หัวหน้าครัวเรือน
                                </label>
                                <label class="radio">
                                    <input type="radio" name="member_hhold_relations" value="บุตร" required>
                                    <span></span>บุตร
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio">
                                    <input type="radio" name="member_hhold_relations" value="สามี" required>
                                    <span></span>สามี
                                </label>
                                <label class="radio">
                                    <input type="radio" name="member_hhold_relations" value="หลาน" required>
                                    <span></span>หลาน
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio">
                                    <input type="radio" name="member_hhold_relations" value="ภรรยา" required>
                                    <span></span>ภรรยา
                                </label>
                                <label class="radio">
                                    <input type="radio" name="member_hhold_relations" value="อื่นๆ" required>
                                    <span></span>อื่นๆ
                                </label><input type="text" name="member_hhold_relations_other" class="form-control" placeholder="อื่นๆ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>เลขบัตรประจำตัวประชาชน</label>
                    <input type="text" name="member_id_card" class="form-control" placeholder="เลขบัตรประจำตัวประชาชน ..." required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>วัน/เดือน/ปีเกิด </label>
                    <input type="date" name="member_datofbirth" class="form-control" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>การศึกษาสูงสุด</label>
                    <input type="text" name="member_highest_edu" class="form-control" placeholder="การศึกษาสูงสุด ..." required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>อาชีพ </label>
                    <input type="text" name="member_occupation" class="form-control" placeholder="อาชีพ ..." required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                        <label>รายได้</label>
                        <div class="input-group">
                            <input type="text" name="member_income" class="form-control" placeholder="รายได้ ..." required>
                            <span class="input-group-text">บาท/เดือน</span>
                        </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label><b>สิทธิสวัสดิการที่ได้รับ:</b></label>
                    <div class="checkbox-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="checkbox">
                                    <input type="checkbox" name="member_benefit_rights_received[]" value="เบี้ยยังชีพผู้สูงอายุ">
                                    <span></span>เบี้ยยังชีพผู้สูงอายุ
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="member_benefit_rights_received[]" value="เงินซ่อมแซมบ้าน">
                                    <span></span>เงินซ่อมแซมบ้าน
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="member_benefit_rights_received[]" value="อื่นๆ">
                                    <span></span>อื่นๆ
                                </label>
                                <input type="text" name="member_benefit_rights_received_other" class="form-control" placeholder="อื่นๆ">
                            </div>
                            <div class="col-sm-4">
                                <label class="checkbox">
                                    <input type="checkbox" name="member_benefit_rights_received[]" value="เบี้ยความพิการ">
                                    <span></span>เบี้ยความพิการ
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="member_benefit_rights_received[]" value="เงินสงเคราะห์">
                                    <span></span>เงินสงเคราะห์
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="checkbox">
                                    <input type="checkbox" name="member_benefit_rights_received[]" value="เงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด">
                                    <span></span>เงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="member_benefit_rights_received[]" value="สวัสดิการที่ได้จากการลงทะเบียนโครงการเพื่อสวัสดิการแห่งรัฐ">
                                    <span></span>สวัสดิการที่ได้จากการลงทะเบียนโครงการเพื่อสวัสดิการแห่งรัฐ
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12">
                <div class="form-group">
                    <label style=""><b>สภาพปัญหา (มิติสุขภาพ):</b></label>
                    <div class="radio-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio">
                                    <input type="radio" name="pcond_health_dimension" value="ปกติ" required>
                                    <span></span>ปกติ
                                </label>
                                <label class="radio">
                                    <input type="radio" name="pcond_health_dimension" value="พิการ" required>
                                    <span></span>พิการ
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio">
                                    <input type="radio" name="pcond_health_dimension" value="ป่วยเรื้อรัง" required>
                                    <span></span>ป่วยเรื้อรัง
                                </label>
                                <label class="radio">
                                    <input type="radio" name="pcond_health_dimension" value="ป่วยติดเตียง" required>
                                    <span></span>ป่วยติดเตียง
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <label><b>สภาพปัญหา (มิติการศึกษา)</b></label>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>ขาดโอกาสทางการศึกษา </label>
                            <input type="text" name="pcond_edu_dimension_1" class="form-control" placeholder="ขาดโอกาสทางการศึกษา ..." required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>ไม่มีทุนการศึกษา </label>
                            <input type="text" name="pcond_edu_dimension_2" class="form-control" placeholder="ไม่มีทุนการศึกษา ..." required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>อ่าน เขียน ภาษาไทยไม่ได้ </label>
                            <input type="text" name="pcond_edu_dimension_3" class="form-control" placeholder="ไม่มีทุนการศึกษา ..." required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>ไม่ประสบปัญหา </label>
                            <input type="text" name="pcond_edu_dimension" class="form-control" placeholder="ไม่ประสบปัญหา ..." required>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12">
                <div class="form-group">
                    <label><b>สภาพปัญหา (มิติการเข้าถึงบริการภาครัฐ):</b></label>
                    <div class="checkbox-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="checkbox">
                                    <input type="checkbox" name="pcond_gov_dimensions_serv[]" value="สิทธิการรักษาพยาบาล">
                                    <span></span>สิทธิการรักษาพยาบาล
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="pcond_gov_dimensions_serv[]" value="เบี้ยยังชีพผู้สูงอายุ">
                                    <span></span>เบี้ยยังชีพผู้สูงอายุ
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="pcond_gov_dimensions_serv[]" value="เงินซ่อมแซมบ้าน">
                                    <span></span>เงินซ่อมแซมบ้าน
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="pcond_gov_dimensions_serv[]" value="อื่นๆ">
                                    <span></span>อื่นๆ
                                </label>
                                <input type="text" name="pcond_gov_dimensions_serv_other" class="form-control" placeholder="อื่นๆ">
                            </div>
                            <div class="col-sm-4">
                                <label class="checkbox">
                                    <input type="checkbox" name="pcond_gov_dimensions_serv[]" value="บัตรประจำตัวประชาชน">
                                    <span></span>บัตรประจำตัวประชาชน
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="pcond_gov_dimensions_serv[]" value="เบี้ยความพิการ">
                                    <span></span>เบี้ยความพิการ
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="pcond_gov_dimensions_serv[]" value="เงินสงเคราะห์">
                                    <span></span>เงินสงเคราะห์
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="checkbox">
                                    <input type="checkbox" name="pcond_gov_dimensions_serv[]" value="บัตรประจำตัวผู้พิการ">
                                    <span></span>บัตรประจำตัวผู้พิการ
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="pcond_gov_dimensions_serv[]" value="เงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด">
                                    <span></span>เงินอุดหนุนเพื่อการเลี้ยงดูเด็กแรกเกิด
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" name="pcond_gov_dimensions_serv[]" value="สวัสดิการที่ได้จากการลงทะเบียนโครงการเพื่อสวัสดิการแห่งรัฐ">
                                    <span></span>สวัสดิการที่ได้จากการลงทะเบียนโครงการเพื่อสวัสดิการแห่งรัฐ
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> ย้อนกลับ</a>
        <a class="btn btn-info next">ถัดไป  <i class="fas fa-angle-right"></i></a>
    </div>
</div>