import AppForm from '../app-components/Form/AppForm';

Vue.component('portofolio-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                project:  '' ,
                slug:  '' ,
                text:  '' ,
                published_at:  '' ,
                enabled:  false ,
                
            }
        }
    }

});