
<div class="tab-pane fade show active" role="tabpanel" id="step1" aria-labelledby="step1-tab">
    <br>
    <h3>1.ข้อมูลที่อยู่</h3>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>รหัสประจำบ้าน:</label>
                    <input type="text" name="addr_house_code" class="form-control" placeholder="รหัสประจำบ้าน" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>บ้านเลขที่:</label>
                    <input type="text" name="addr_house_number" class="form-control" placeholder="บ้านเลขที่" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>หมู่ที:</label>
                    <input type="text" name="addr_moo" class="form-control" placeholder="หมู่ที" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>จังหวัด</label>
                    <select name="addr_province_id" class="form-control" required>
                        <option value="">-- เลือก --</option>
                        @foreach($provinces as $key => $value)
                            <option value="{{ $value->name_th }}">{{ $value->name_th }}</option>
                        @endforeach
                    </select>   
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>อำเภอ</label>
                    <select name="addr_amphure_id" class="form-control" required>
                        <option value="">-- เลือก --</option>
                        @foreach($amphures as $key => $value)
                            <option value="{{ $value->name_th }}">{{ $value->name_th }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>ตำบล</label>
                    <select name="addr_district_id" class="form-control" required>
                        <option value="">-- เลือก --</option>
                        @foreach($districts as $key => $value)
                            <option value="{{ $value->name_th }}">{{ $value->name_th }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>รหัสไปรษณีย์:</label>
                    <input type="text" name="addr_zip_code" class="form-control" placeholder="รหัสไปรษณีย์" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>หมาลเลขโทรศัพท์:</label>
                    <input type="text" name="addr_phone_number" class="form-control" placeholder="หมาลเลขโทรศัพท์" required>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <a class="btn btn-info next">ถัดไป  <i class="fas fa-angle-right"></i></a>
    </div>
</div>