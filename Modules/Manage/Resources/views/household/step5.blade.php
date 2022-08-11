
<div class="tab-pane fade" role="tabpanel" id="step5" aria-labelledby="step5-tab">
    <br>
    <h3>5.ผลการดำเนินการให้ความช่วยเหลือจากหน่วยงาน/องค์กร</h3>

    <div class="card-body">
        <div class="form-group">
                <label><b>1.สุขภาพ</b></label>
                <div class="row">
                        <div class="col-sm-4">
                                <label>ผลการดำเนินงาน (โดยสังเขป)</label>
                                <input type="text" name="rs_agencies_health_perform" class="form-control" placeholder="ผลการดำเนินงาน (โดยสังเขป)" required>
                        </div>
                        <div class="col-sm-4">
                                <label>งบประมาณ (ถ้ามี)</label>
                                <input type="text" name="rs_agencies_health_budget" class="form-control" placeholder="งบประมาณ (ถ้ามี)">
                        </div>
                        <div class="col-sm-4">
                                <label>หน่วยงาน/องค์กรที่ดำเนินการ</label>
                                <input type="text" name="rs_agencies_health_support" class="form-control" placeholder="หน่วยงาน/องค์กรที่ดำเนินการ/สนับสนุน" required>
                        </div>
                </div>
        </div>
        <div class="form-group">
                <label><b>2.การศึกษา</b></label>
                <div class="row">
                        <div class="col-sm-4">
                                <label>ผลการดำเนินงาน (โดยสังเขป)</label>
                                <input type="text" name="rs_agencies_edu_perform" class="form-control" placeholder="ผลการดำเนินงาน (โดยสังเขป)" required>
                        </div>
                        <div class="col-sm-4">
                                <label>งบประมาณ (ถ้ามี)</label>
                                <input type="text" name="rs_agencies_edu_budget" class="form-control" placeholder="งบประมาณ (ถ้ามี)">
                        </div>
                        <div class="col-sm-4">
                                <label>หน่วยงาน/องค์กรที่ดำเนินการ</label>
                                <input type="text" name="rs_agencies_edu_support" class="form-control" placeholder="หน่วยงาน/องค์กรที่ดำเนินการ/สนับสนุน" required>
                        </div>
                </div>
        </div>
        <div class="form-group">
                <label><b>3.การเข้าถึงบริการภาครัฐ</b></label>
                <div class="row">
                        <div class="col-sm-4">
                                <label>ผลการดำเนินงาน (โดยสังเขป)</label>
                                <input type="text" name="rs_agencies_gov_serv_perform" class="form-control" placeholder="ผลการดำเนินงาน (โดยสังเขป)" required>
                        </div>
                        <div class="col-sm-4">
                                <label>งบประมาณ (ถ้ามี)</label>
                                <input type="text" name="rs_agencies_gov_serv_budget" class="form-control" placeholder="งบประมาณ (ถ้ามี)">
                        </div>
                        <div class="col-sm-4">
                                <label>หน่วยงาน/องค์กรที่ดำเนินการ</label>
                                <input type="text" name="rs_agencies_gov_serv_support" class="form-control" placeholder="หน่วยงาน/องค์กรที่ดำเนินการ/สนับสนุน" required>
                        </div>
                </div>
        </div>
        <div class="form-group">
                <label><b>4.รายได้</b></label>
                <div class="row">
                        <div class="col-sm-4">
                                <label>ผลการดำเนินงาน (โดยสังเขป)</label>
                                <input type="text" name="rs_agencies_income_perform" class="form-control" placeholder="ผลการดำเนินงาน (โดยสังเขป)" required>
                        </div>
                        <div class="col-sm-4">
                                <label>งบประมาณ (ถ้ามี)</label>
                                <input type="text" name="rs_agencies_income_budget" class="form-control" placeholder="งบประมาณ (ถ้ามี)">
                        </div>
                        <div class="col-sm-4">
                                <label>หน่วยงาน/องค์กรที่ดำเนินการ</label>
                                <input type="text" name="rs_agencies_income_support" class="form-control" placeholder="หน่วยงาน/องค์กรที่ดำเนินการ/สนับสนุน" required>
                        </div>
                </div>
        </div>
        <div class="form-group">
                <label><b>5.ความเป็นอยู่</b></label>
                <div class="row">
                        <div class="col-sm-4">
                                <label>ผลการดำเนินงาน (โดยสังเขป)</label>
                                <input type="text" name="rs_agencies_being_perform" class="form-control" placeholder="ผลการดำเนินงาน (โดยสังเขป)" required>
                        </div>
                        <div class="col-sm-4">
                                <label>งบประมาณ (ถ้ามี)</label>
                                <input type="text" name="rs_agencies_being_budget" class="form-control" placeholder="งบประมาณ (ถ้ามี)">
                        </div>
                        <div class="col-sm-4">
                                <label>หน่วยงาน/องค์กรที่ดำเนินการ</label>
                                <input type="text" name="rs_agencies_being_support" class="form-control" placeholder="หน่วยงาน/องค์กรที่ดำเนินการ/สนับสนุน" required>
                        </div>
                </div>
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <a class="btn btn-secondary previous"><i class="fas fa-angle-left"></i> ย้อนกลับ</a>
        {{-- <a class="btn btn-info next">Submit <i class="fas fa-angle-right"></i></a> --}}
        <Button class="btn btn-info next">บันทึก <i class="fas fa-angle-right"></i></Button>
    </div>
</div>