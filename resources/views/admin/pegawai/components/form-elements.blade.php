<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nama_pegawai'), 'has-success': fields.nama_pegawai && fields.nama_pegawai.valid }">
    <label for="nama_pegawai" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pegawai.columns.nama_pegawai') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nama_pegawai" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nama_pegawai'), 'form-control-success': fields.nama_pegawai && fields.nama_pegawai.valid}" id="nama_pegawai" name="nama_pegawai" placeholder="{{ trans('admin.pegawai.columns.nama_pegawai') }}">
        <div v-if="errors.has('nama_pegawai')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nama_pegawai') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('no_telpon'), 'has-success': fields.no_telpon && fields.no_telpon.valid }">
    <label for="no_telpon" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pegawai.columns.no_telpon') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.no_telpon" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('no_telpon'), 'form-control-success': fields.no_telpon && fields.no_telpon.valid}" id="no_telpon" name="no_telpon" placeholder="{{ trans('admin.pegawai.columns.no_telpon') }}">
        <div v-if="errors.has('no_telpon')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('no_telpon') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('alamat'), 'has-success': fields.alamat && fields.alamat.valid }">
    <label for="alamat" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pegawai.columns.alamat') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.alamat" v-validate="''" id="alamat" name="alamat"></textarea>
        </div>
        <div v-if="errors.has('alamat')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('alamat') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tanngal_lahir'), 'has-success': fields.tanngal_lahir && fields.tanngal_lahir.valid }">
    <label for="tanngal_lahir" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pegawai.columns.tanngal_lahir') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.tanngal_lahir" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('tanngal_lahir'), 'form-control-success': fields.tanngal_lahir && fields.tanngal_lahir.valid}" id="tanngal_lahir" name="tanngal_lahir" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('tanngal_lahir')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tanngal_lahir') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('status_karyawan'), 'has-success': fields.status_karyawan && fields.status_karyawan.valid }">
    <label for="status_karyawan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pegawai.columns.status_karyawan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.status_karyawan" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('status_karyawan'), 'form-control-success': fields.status_karyawan && fields.status_karyawan.valid}" id="status_karyawan" name="status_karyawan" placeholder="{{ trans('admin.pegawai.columns.status_karyawan') }}">
        <div v-if="errors.has('status_karyawan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('status_karyawan') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jabatan'), 'has-success': fields.jabatan && fields.jabatan.valid }">
    <label for="jabatan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.pegawai.columns.jabatan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.jabatan" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jabatan'), 'form-control-success': fields.jabatan && fields.jabatan.valid}" id="jabatan" name="jabatan" placeholder="{{ trans('admin.pegawai.columns.jabatan') }}">
        <div v-if="errors.has('jabatan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jabatan') }}</div>
    </div>
</div>


