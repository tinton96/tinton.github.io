import AppForm from '../app-components/Form/AppForm';

Vue.component('pegawai-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nama_pegawai:  '' ,
                no_telpon:  '' ,
                alamat:  '' ,
                tanngal_lahir:  '' ,
                status_karyawan:  '' ,
                jabatan:  '' ,
                
            }
        }
    }

});