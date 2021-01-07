<template>
    <v-content fill-height style="background: center url('/img/default_cover.png'); background-size: cover">
        <v-container class="fill-height" style="height: 100vh" fluid>
            <v-row align="center" justify="center">
                <v-col cols="12" sm="8" md="3">
                    <v-card class="elevation-12">
                        <div style="padding: 0 .5rem"><v-img src="/img/SparkFlightOps.svg"></v-img></div>
                        <v-card-text>
                            <v-form>
                                <v-text-field label="Email" name="login" prepend-icon="mdi-email" type="text"/>
                                <v-text-field id="password" label="Password" name="password" prepend-icon="mdi-lock" type="password"/>
                            </v-form>
                        </v-card-text>
                        <v-card-actions>
                            <div class="flex-grow-1"></div>
                            <v-btn link>Forgot Password</v-btn>
                            <v-btn color="primary" @click="login">Login</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
        <!-- Make me happy. Don't remove this when/if you modify this page. Thanks!!! -->
        <div class="vaos-box">
            <div>Powered By</div>
            <img src="/img/VAOSLogo.svg" style="height: 50px; margin: auto;">
        </div>
    </v-content>
</template>

<script>
    export default {
        name: "Login",
        data() {
            return {
                comm_name: window.appSettings.community_name
            }
        },
        methods: {
            login() {

            }
        }
    }
</script>

<style scoped>
.vaos-box {
    position: absolute;
    bottom: 0;
    padding: 10px 15px;
    text-align: center;
    color: white;
}
</style>
