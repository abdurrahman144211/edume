<template>
    <div class="login-form">
        <form action="#" method="post">
            <input type="text" name="email" placeholder="Email" v-model="email">
            <input type="password" name="password" placeholder="Password" v-model="password">
            <div class="button-box">
                <div class="login-toggle-btn">
                    <input type="checkbox" id="remember" v-model="remember">
                    <label for="remember">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button class="default-btn" @click="attemptLogin()">Login</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                email: '',
                password: '',
                remember: false
            }
        },

        attemptLogin(){
            if
        }
    }
</script>
