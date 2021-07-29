<template>
    <div class="container">
        <section class="pt-3">
            <form @submit.prevent="AboutHeader()">
                <div class="row">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <h4>About Header</h4>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control"  v-model="AboutForm.title" id="title" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <input type="text" class="form-control"  v-model="AboutForm.body" id="AboutBody" required>
                        </div>
                        <button type="submit" class="btn btn-primary col-12">Submit</button>
                    </div>
                </div>
                
            </form>
        </section>
        <hr>
        <section>
            <form @submit.prevent="PolicyPage()">
                <div class="row">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <h4>Policy Page</h4>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control"  v-model="PolicyForm.title" id="title" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <input type="text" class="form-control"  v-model="PolicyForm.body" id="PolicyBody" required>
                        </div>
                        <button type="submit" class="btn btn-primary col-12">Submit</button>
                    </div>
                </div>
                
            </form>
        </section>
        <hr>
        <section>
            <form @submit.prevent="TermsPage()">
                <div class="row">
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <h4>Policy Page</h4>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control"  v-model="TermsForm.title" id="title" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <input type="text" class="form-control"  v-model="TermsForm.body" id="TermsBody" required>
                        </div>
                        <button type="submit" class="btn btn-primary col-12">Submit</button>
                    </div>
                </div>
                
            </form>
        </section>
    </div>
</template>
<script>
import { createEditor } from 'vueditor';

export default({
    data() {
        return {
            AboutBody : null,
            PolicyBody: null,
            TermsBody: null,
            AboutForm: new form({
                title: null,
                body: null,
                type: 'about'
            }),
            PolicyForm: new form({
                title: null,
                body: null,
                type: 'policy',
            }),
            TermsForm: new form({
                title: null,
                body: null,
                type: 'terms'
            }),
        }

    },
    methods:{
        AboutHeader(){
            this.$Progress.start();
            this.AboutForm.body = this.AboutBody.getContent();
            const result = this.AboutForm.post('/api/cms/store').then((response) => {
                this.$Progress.finish();
                  Toast.fire({
                        icon: 'success',
                        title: 'About Saved Successfully'
                    });
            });
        },
        PolicyPage(){
            this.$Progress.start();
            this.PolicyForm.body = this.PolicyBody.getContent();
            const result = this.PolicyForm.post('/api/cms/store').then((response) => {
                this.$Progress.finish();
                  Toast.fire({
                        icon: 'success',
                        title: 'Policy Saved Successfully'
                    });
            });
        },
        TermsPage(){
            this.$Progress.start();
            this.TermsForm.body = this.TermsBody.getContent();
            const result = this.TermsForm.post('/api/cms/store').then((response) => {
                this.$Progress.finish();
                  Toast.fire({
                        icon: 'success',
                        title: 'Terms Saved Successfully'
                    });
            });
        },
    },
    mounted(){
        this.AboutBody =  createEditor('#AboutBody', {
            toolbar: [
                'removeFormat', 'undo', '|', 'elements', 'fontName', 'fontSize', 'foreColor', 'backColor', 'divider',
                'bold', 'italic', 'underline', 'strikeThrough', 'links', 'divider', 'subscript', 'superscript',
                'divider', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull', '|', 'indent', 'outdent',
                'insertOrderedList', 'insertUnorderedList', 'tables', '|', 'switchView'
            ],
            fontName: [
                {val: 'arial black'}, 
                {val: 'times new roman'}, 
                {val: 'Courier New'}
            ],
            fontSize: [
                '12px', '14px', '16px', '18px', '20px', '24px', '28px', '32px', '36px'
            ],
        });
        this.PolicyBody =  createEditor('#PolicyBody', {
            toolbar: [
                'removeFormat', 'undo', '|', 'elements', 'fontName', 'fontSize', 'foreColor', 'backColor', 'divider',
                'bold', 'italic', 'underline', 'strikeThrough', 'links', 'divider', 'subscript', 'superscript',
                'divider', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull', '|', 'indent', 'outdent',
                'insertOrderedList', 'insertUnorderedList', 'tables', '|', 'switchView'
            ],
            fontName: [
                {val: 'arial black'}, 
                {val: 'times new roman'}, 
                {val: 'Courier New'}
            ],
            fontSize: [
                '12px', '14px', '16px', '18px', '20px', '24px', '28px', '32px', '36px'
            ],
        });
        this.TermsBody =  createEditor('#TermsBody', {
            toolbar: [
                'removeFormat', 'undo', '|', 'elements', 'fontName', 'fontSize', 'foreColor', 'backColor', 'divider',
                'bold', 'italic', 'underline', 'strikeThrough', 'links', 'divider', 'subscript', 'superscript',
                'divider', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull', '|', 'indent', 'outdent',
                'insertOrderedList', 'insertUnorderedList', 'tables', '|', 'switchView'
            ],
            fontName: [
                {val: 'arial black'}, 
                {val: 'times new roman'}, 
                {val: 'Courier New'}
            ],
            fontSize: [
                '12px', '14px', '16px', '18px', '20px', '24px', '28px', '32px', '36px'
            ],
        });
        axios.get('/api/cms/getAllCms').then((response) => {
            if(response.data.about){
                this.AboutForm.title = response.data.about.title;
                this.AboutBody.setContent(response.data.about.body);
            }
            
            if(response.data.policy){
                this.PolicyForm.title = response.data.policy.title;
                this.PolicyBody.setContent(response.data.policy.body);
            }
           
            if(response.data.terms){
                this.TermsForm.title = response.data.terms.title;
                this.TermsBody.setContent(response.data.terms.body);
            }
            
        }); 
    }
})
</script>
