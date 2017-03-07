import Vue from 'vue';
import axios from 'axios';
import Form from './core/Form';

window.axios = axios;
window.Form = Form;

new Vue({
    el: '#app',

    data: {
        form: new Form({
            name: '',
            second_name: '',
            third_name: '',
            phone: ''
        })
    },

    mounted: function() {
		this.form.init('/profile/get-profile');
    },

    methods: {
        onSubmit() {
            this.form.post('/profile')
                .then(response => console.log(response));
        }
    }
});