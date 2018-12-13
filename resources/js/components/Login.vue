<template>
    <div class="login-form">
        <form action="#" method="post">
            <input
                    type="text"
                    placeholder="Email"
                    v-model="form.email"
                    :class="{ 'is-invalid': form.errors.has('email') }">

            <has-error :form="form" field="email"></has-error>

            <input
                    type="password"
                    placeholder="Password"
                    v-model="form.password"
                    :class="{ 'is-invalid': form.errors.has('password') }">
            <has-error :form="form" field="password"></has-error>

            <div class="button-box">
                <div class="login-toggle-btn">
                    <input type="checkbox" id="remember" v-model="form.remember">
                    <label for="remember">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button class="default-btn" @click.prevent="attemptLogin()" v-show="!loading">Login</button>
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
                    email: '',
                    password: '',
                    remember: false
                })
            }
        },

        methods:{
            attemptLogin()
            {
                if(! this.form.email || ! this.form.password || ! this.validEmail(this.form.email)) return;
                this.loading = true;
                this.persist();
            },

            validEmail(email)
            {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            },

            persist(){
                this.form.post('/login')
                    .then(response => {
                        // location.reload();
                    }).catch(error => {
                    this.loading = false;
                    this.form.password = '';
                });
            }
        }
    }
</script>
