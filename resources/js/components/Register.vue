<template>
    <div class="login-form">
        <form action="#" method="post">
            <input
                    type="text"
                    name="name"
                    placeholder="Name"
                    v-model="form.name"
                    :class="{ 'is-invalid': form.errors.has('name') }">

            <has-error :form="form" field="name"></has-error>


            <input
                    type="text"
                    name="email"
                    placeholder="Email"
                    v-model="form.email"
                    :class="{ 'is-invalid': form.errors.has('email') }">

            <has-error :form="form" field="email"></has-error>

            <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    v-model="form.password"
                    :class="{ 'is-invalid': form.errors.has('password') }">
            <has-error :form="form" field="password"></has-error>

            <input
                    type="password"
                    name="password_confirmation"
                    placeholder="Password"
                    v-model="form.password_confirmation"
                    :class="{ 'is-invalid': form.errors.has('password_confirmation') }">
            <has-error :form="form" field="password_confirmation"></has-error>


            <div class="button-box">
                <div class="login-toggle-btn">
                    <input type="checkbox" id="remember" v-model="form.remember">
                    <label for="remember">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button class="default-btn" @click.prevent="attemptRegister()" v-show="!loading">Register</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                loading: false,
                form: new Form({
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: ''
                })
            }
        },

        computed:{
            validForm(){
                return !! (this.form.name && this.form.email && this.form.password &&  this.validEmail(this.form.email) );
            }
        },

        methods:{
            attemptRegister()
            {
                if(!this.validForm) return;
                this.loading = true;
                this.persist();
            },

            validEmail(email)
            {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            },

            persist(){
                this.form.post('/register')
                    .then(response => {
                        location.reload();
                    }).catch(error => {
                    this.loading = false;
                    this.form.password = '';
                });
            }
        }
    }
</script>
